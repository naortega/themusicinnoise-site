<?php
require 'config.php';
require '2017-02-20-parabola-with-lvm-on-luks.cfg.php';
require 'templates/blog-header.php';
?>
<p>As of recently I have reinstalled Parabola with a LUKS encrypted partition containing both swap and root (I do not have a separate home partition). I found this to be a long and painful process, but I learned quite a bit from doing it. My current setup is as follows:</p>

<pre>
Device     Mount  Type       File System
/dev/sda1  /boot  Linux      ext4
/dev/sda2  -      Linux LVM  LUKS

LVol       Mount  File System
lvolroot   /      ext4
lvolswap   -      swap
</pre>

<p>This configuration does leave <code>`/boot'</code> vulnerable, however I do not have anything particularly important there (if you do you may want to look up how to use LVM on LUKS with <code>`/boot'</code> in an encrypted partition, I believe the ArchWiki has an page on this). I will continue to show you how to setup your configuration so that you can have a similar config (such as adding a <code>`/home'</code> partition or otherwise).</p>

<p><b>WARNING:</b> I am not responsible for what the outcome of this is if you are following this. This is simply a light guide. Basically, this is a <b>no warranty</b> statement. It will most likely work, but I'm not going to guarantee anything.</p>

<p>I will start assuming you've already booted from the Parabola live CD (the main one, not the MATE one). I will also assume that the device you're installing to is <code>`/dev/sda'</code>, <b>please make sure you're using the correct device!</b>. Last thing I want is an e-mail saying that my post caused someone to delete an important drive or something.</p>

<p>To begin will most likely want to secure your disk and assure that no information is left behind on it by overwriting the entire thing. You can do this by running <code>`dd if=/dev/urandom of=/dev/sda bs=1M status=progress'</code>. You can use <code>`/dev/zero'</code> instead as the <code>`if'</code>, but beware that if <code>`dd'</code> misses anything then it will be evident that that block of information was not wiped and is relevant. This will take a while, so go make a coffee, go out for a walk, read a book, do something else for a while. I ran this on a 500GB mechanical hard drive and it took about an hour, you can approximate by looking at the progress information (the parameter of which I so generously provided, <code>`status=progress'</code>, unlike most other guides) and decide what to do, if you have an SSD it may take less time.</p>

<p>Once you've come back for the hundredth time to finally see that it finished we can now begin with the partitioning. First, you'll want to run <code>`cfdisk /dev/sda'</code> (you can use whatever you want, that's just what I used) and choose the <code>`dos'</code> disk label (others may work, but <code>`dos'</code> is what I used, and <code>`gpt'</code> failed horribly for me). After this create a new primary partition of about 100M, Linux, and set the bootable flag for it (from now on it will be referred to as <code>`/dev/sda1'</code>, same warning as before). Then allocate the rest of the space (or whatever you want) to a second primary partition which will be our LUKS encrypted LVM partition, make sure it's a Linux LVM type (from now on it will be referred to as <code>`/dev/sda2'</code>, again, please make sure). After which write the changes and exit the program.</p>

<p>First let's get the boot partition out of the way. You only need to run <code>`mkfs.ext4 /dev/sda1'</code> (or ext2 if you prefer, but ext4 works for me).</p>

<p>Now it's finally time to get to the encryption. First make sure the kernel module is enabled: <code>`modprobe dm-crypt'</code>. Now you'll want to run a benchmark to see which encryption algorithm will work best with your computer, seeing that certain CPUs favor certain algorithms. You can see this by running <code>`cryptsetup benchmark'</code>. It is likely that aes-xts will be the best option in your case with a certain key size. You can now run <code>`cryptsetup --cipher <your-cipher-type> -s <key-size> luksFormat /dev/sda2'</code>. If indeed the best algorithm for your CPU is aes-xts then you can ignore the <code>`--cipher <your-cipher-type>'</code> argument, since it will use that by default, otherwise please refer to the docs or man pages. After this your <code>`/dev/sda2'</code> partition should be formatted with LUKS. We're half way there!</p>

<p>Now that you have the encrypted partition it's time to open it ('cause right now it's closed), and by open I just mean decrypt it, it will not be mounted (yet). Run <code>`cryptsetup luksOpen /dev/sda2 <label>'</code>. For <code>`<label>'</code> you can put anything you want, I put <code>`lvmcrypt'</code> just to make it clear as to what it is (and that's how I'll refer to it in the rest of this post). Now you should be able to find the partition (or, rather, a link to your partition) in <code>`/dev/mapper/'</code> with the label you just gave it, and you can treat it just like any other partition, which is what we'll do for getting LVM setup on it. The following will be a list of commands to setup LVM with root and swap logical volumes:</p>

<pre>
  # Load kernel module
  modprobe dm-mod
  # Setup LVM
  pvcreate /dev/mapper/lvmcrypt
  # Create the LVM group I use VolGroup0
  vgcreate VolGroup0 /dev/mapper/lvmcrypt
  # Create the swap partition
  lvcreate -C y -L 4G VolGroup0 -n lvolswap
  # Create root partition with the rest of the space
  lvcreate -l +100%FREE VolGroup0 -n lvolroot
</pre>

<p>At this point all the partitions should be created and available in <code>`/dev/mapper/'</code> with names like <code>`VolGroup0-lvolswap'</code> (or whatever you put for the group and volume names). These are the volumes we'll be working with. Simply run:</p>

<pre>
  mkfs.ext4 /dev/mapper/VolGroup0-lvolroot
  mkswap /dev/mapper/VolGroup0-lvolswap -L swap
</pre>

<p>Or however you wanted to format them.</p>

<p>From this point on you can mount them however you'd like according to the Parabola installation guide. The only thing you need to be careful of is when it comes time to setup the kernel hooks and the GRUB settings. When it comes time to setup the hooks you'll want to your <code>`/etc/mkinitcpio.conf'</code> <code>`HOOKS'</code> variable to look something like this: <code>`HOOKS="base udev autodetect modconf keyboard block encrypt lvm2 filesystems fsck"'</code>. The main hooks here that you <b>need</b> are <code>`keyboard'</code>, <code>`encrypt'</code>, and <code>`lvm2'</code> (the order they're in compared to the other hooks <b>is important</b>). You'll also want to modify your <code>`/etc/default/grub'</code> to have the <code>`GRUB_CMDLINE_LINUX_DEFAULT'</code> variable look something like <code>`GRUB_CMDLINE_LINUX_DEFAULT="quiet splash cryptdevice=UUID=<luks-uuid>:lvmcrypt"'</code>, where <code>`<luks-uuid>'</code> is the UUID of your LUKS partition which you can find via looking at the symbolic links in <code>`/dev/disk/by-uuid/'</code>.</p>

<p>If you have a swap partition then you will want to add a <code>`resume'</code> flag and hook to the prior. To do this in <code>`/etc/default/grub'</code> change it the variable to look like <code>`GRUB_CMDLINE_LINUX_DEFAULT="... resume=/dev/mapper/VolGroup0-lvolswap"'</code>, and change the hooks in <code>`/etc/mkinitpcio.conf'</code> to look like <code>`HOOKS="... encrypt lvm2 resume ..."'</code>. With this hibernation should work just fine.</p>

<p>When you finish making the changes make sure to run <code>`mkinitcpio -p linux-libre'</code> and then for GRUB run <code>`grub-mkconfig -o /boot/grub/grub.cfg'</code>.</p>

<p>After you're done with all of the configuration and are exiting you'll have to properly unmount the volumes and close the encrypted device. To do this start by unmounting the volumes as would typically do when installing Parabola, and then run the following:</p>

<pre>
  # Disable LVM
  vgchange -an
  # Close the LUKS device
  cryptsetup luksClose lvmcrypt
</pre>

<p>You should now be able to reboot and startup your new LUKS encrypted Parabola system. I may have forgotten something, if so please send me an e-mail so I can correct it (see my <a href="/contact/" >contact page</a>).</p>


<?php
require 'templates/blog-footer.php';
?>