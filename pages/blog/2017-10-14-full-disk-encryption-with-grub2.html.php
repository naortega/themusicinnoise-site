<?php
require 'config.php';
require '2017-10-14-full-disk-encryption-with-grub2.cfg.php';
require 'templates/blog-header.php';
?>
<p>A long time ago I figured out that <a href="https://wiki.archlinux.org/index.php/GRUB#Boot_partition" target="_blank" >GRUB2 has the capability of decrypting a LUKS encrypted partition</a> therefore allowing for the <code>`/boot'</code> partition to be encrypted, however I haven't had the time to test it out until today. After that I decided it'd be a good idea to write a blog entry on how I did it, to help others and to serve as a reference for myself next time I want to do an install.</p>

<p>First, please note that I did all this while installing <a href="https://www.archlinux.org/" target="_blank" >ArchLinux</a>, but it should work just about the same for any manual installation of any distro. Also, some of the steps I explain here will be repeats of the post I did on <a href="2017-02-20-parabola-with-lvm-on-luks.php" >LVM on LUKS encryption</a> (where <code>`/boot'</code> is not encrypted so GRUB can boot the kernel).</p>

<p><b>NOTICE:</b> In this post I will be using <code>`/dev/sda'</code> to refer to the device on which I want to put the encrypted partition, I will be calling my LVM container <code>`lvmcrypt'</code>, the logical volume group <code>`CryptGroup'</code>, the swap logical partition <code>`swap'</code>, and the root logical partition <code>`root'</code>. Change any of these if you care to, feel free to customize.</p>

<p>Alright, so let's get to it!</p>

<h3>Partitioning & Formatting</h3>
<p>
My physical partitioning is quite simple, I have one partition (<code>`/dev/sda1'</code>) set to be the entire disk, make sure the type is set to <code>`Linux LVM'</code>. After this you'll want to setup a LUKS partition using <code>`cryptsetup'</code>. First load the <code>`dm-crypt'</code> module via <code>`modprobe dm-crypt'</code>, afterwards you can format the partition via <code>`cryptsetup -s <key_size> luksFormat /dev/sda1'</code>. You can probably change come settings to it to choose different ciphers and such. In order to get some benchmarks for what cipher would be best for your system use <code>`cryptsetup benchmark'</code>. After formatting the partition you'll have to open it via <code>`cryptsetup luksOpen /dev/sda1 lvmcrypt'</code>.</p>

<p>Now to setup and format the LVM partitions. Simply follow the following commands:</p>
<code>
# Load kernel module<br />
modprobe dm-mod<br />
# Create physical LVM container on partition<br />
pvcreate /dev/mapper/lvmcrypt<br />
# Create LVM group<br />
vgcreate CryptGroup /dev/mapper/lvmcrypt<br />
# Create swap partition<br />
lvcreate -C y -L 4G CryptGroup -n swap<br />
# Create root partition<br />
lvcreate -l +100%FREE CryptGroup -n root
</code>

<p>Now you should have the following special files in your mapper: <code>`CryptGroup-swap'</code> and <code>`CryptGroup-root'</code>. These now need to be formatted:</p>

<code>
mkfs.ext4 /dev/mapper/CryptGroup-root<br />
mkswap /dev/mapper/CryptGroup-swap -L swap
</code>

<p>After this point you can continue with your typical installation using <code>`CryptGroup-root'</code> and <code>`CryptGroup-swap'</code> until you reach the end of the installation where you need to configure a boot loader and custom kernel hooks.</p>

<h3>Bootloader (GRUB2)</h3>
<p>Firstly, make sure you're using GRUB2, older versions of GRUB do not have the decrypt functionality. You'll want to edit the <code>`/etc/default/grub'</code> file. Uncomment the line that says <code>`GRUB_ENABLE_CRYPTODISK=y'</code>. This will allow GRUB to decrypt the partition in order to find the kernel.</p>

<h3>Kernel Hooks</h3>
<p>Just like in LVM on LUKS, the kernel will need to decrypt as well (not only GRUB). For this you will want to edit the command line parameters of Linux in <code>`/etc/default/grub'</code> to look like this: <code>`GRUB_CMDLINE_LINUX_DEFAULT="quiet splash cryptdevice=/dev/sda1:lvmcrypt root=/dev/mapper/VolGroup0-root resume=/dev/mapper/VolGroup0-swap"'</code>. This will tell the Linux kernel where the kernel, root, and swap are. Since we have the root in an LVM container you will also have to set <code>`GRUB_PRELOAD_MODULES="part_gpt part_msdos lvm"'</code>.</p>

<p>You will also have to edit the kernel hooks in <code>`/etc/mkinitcpio.conf'</code> to look like this: <code>`HOOKS="base udev autodetect modconf keyboard block encrypt lvm2 resume filesystems fsck"'</code>. The important hooks here are <code>`keyboard'</code>, <code>`encrypt'</code>, <code>`lvm2'</code>, and <code>`resume'</code>.</p>

<h3>Final Remarks</h3>
<p>Please note that you will be asked for your password twice, once by GRUB (to find the kernel image to boot) and another by the Linux kernel (to boot the entire OS). If you notice that anything here is incorrect or that something should be fixed, contact me from my <a href="/pages/view/Contact/" >contact page</a> and I'll edit this post.</p>


<?php
require 'templates/blog-footer.php';
?>