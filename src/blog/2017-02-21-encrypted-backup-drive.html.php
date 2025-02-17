<?php
require 'config.php';
require '2017-02-21-encrypted-backup-drive.cfg.php';
require 'templates/blog-header.php';
?>
<p>In my previous post I demonstrated how to setup LVM on LUKS with Parabola GNU/Linux-libre. However, what good is an encrypted hard drive if your backups are completely vulnerable? So here's a small guide on setting up a LUKS partition on your backup device.</p>

<p>In reality it's basically the same as setting up LUKS for Parabola, but I'm not going to make you read all that just to get a LUKS partition setup on your external hard drive. Please note that I'll be referring to the external device as <code>`/dev/sdb'</code>, if it's different for you <b>use your device's path!</b></p>

<p>Alright, to begin you should probably clear the device by filling it with random data with <code>`dd if=/dev/urandom of=/dev/sdb bs=1M status=progress'</code>. This'll probably take a while depending on the size of your device and the speed at which you can write to it, so feel free to do something else meanwhile (for a <b>long</b> while).</p>

<p>Once that's done it's time to format it. Run <code>`cfdisk /dev/sdb'</code> and select the <code>`dos'</code> disk labelling (or whatever you want, I guess). You'll want to create a new primary partition, a Linux type should do just fine. Once it's formatted write the changes and exit.</p>

<p>Now, before creating a filesystem or anything we're going to format the partition you just created with LUKS: <code>`cryptsetup luksFormat /dev/sdb1'</code>. You can also specify other things like the encryption cipher and key sizes and stuff, at which point please refer to the documentation on the ArchWiki or something, but for most cases this should work just fine. This'll format <code>`/dev/sdb1'</code> with LUKS.</p>

<p>Now it's time to open the device in order to work with it as any other device. Run <code>`cryptsetup luksOpen /dev/sdb1 <dev-name>'</code>, where <code>`dev-name'</code> is the name you want the device to take in <code>`/dev/mapper/'</code>. At this point we can finally format it with a proper filesystem (that is, ext4): <code>`mkfs.ext4 /dev/mapper/<dev-name>'</code>. Now the device is ready for mounting and usage. Just make sure to always mount from <code>`/dev/mapper/<dev-name>'</code>, <b>not</b> <code>`/dev/sdb1'</code>. Just make sure that when you want to remove the device that you unmount it first and then run <code>`cryptsetup luksClose <dev-name>'</code>.</p>

<p>Just remember that every time you want to mount the device you will have to run the <code>`cryptsetup luksOpen ...'</code> to mount and <code>`cryptsetup luksClose ...'</code> to dismount.</p>


<?php
require 'templates/blog-footer.php';
?>