<?php
require 'config.php';
require '2021-08-31-installing-archarm-with-uefi-on-the-mcbin.cfg.php';
require 'templates/blog-header.php';
?>
<p>So I've decided to write this little guide because of how much I've suffered
to get this to work, and how absolutely broken the MACCHIATObin documentation
is. Actually, just their website in general is broken. Marvell, please get your
act together with your website. It's not as if you're modifying it all that
often, so stop breaking things.</p>

<p>With that out of the way, let's get to business.</p>

<h3>Requirements</h3>
<p>Aside from the MACCHIATObin itself (which I believe should be fairly
obvious), you're also going to want the following:</p>

<ul>
	<li>SD card (maybe a few)</li>
	<li>USB storage device</li>
	<li>USB to micro-USB cable</li>
	<li>12V power supply</li>
	<li>ATX power supply</li>
	<li>Graphics card (I'm using the NVidia GT 710)</li>
	<li>Hard drive</li>
	<li>SATA cable</li>
	<li>Monitor</li>
	<li>USB keyboard</li>
</ul>

<h3>Prepare ArchLinuxARM U-Boot SD Card</h3>
<p>It's very possible you'll run into issues later when installing UEFI onto the
SPI, so it's good to have an SD card that you can boot from, so as to have
access to a prompt. For this, I suggest going through the entire U-Boot install
instructions provided by ArchLinuxARM.<sup><a href="#r1" >[1]</a></sup> I also
suggest paying attention to the DIP switch or jumper settings, and pay attention
to which are for SD card and SPI boot. This should appear on the board, and in
the ArchLinuxARM documentation it shows the settings for SD card boot, but I'll
repeat both here:</p>

<table>
	<thead>
		<tr>
			<th></th>
			<th colspan="6">Switches/Jumpers</th>
		</tr>
		<tr>
			<th>Boot Type</th>
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
			<th>6</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>SD Card</td>
			<td>OFF</td>
			<td>ON</td>
			<td>ON</td>
			<td>ON</td>
			<td>OFF</td>
			<td>ON</td>
		</tr>
		<tr>
			<td>SPI</td>
			<td>OFF</td>
			<td>OFF</td>
			<td>OFF</td>
			<td>ON</td>
			<td>ON</td>
			<td>OFF</td>
		</tr>
	</tbody>
</table>

<p>Use this as a guide for whenever I refer to booting from SD card or from the
SPI.</p>

<h3>Install UEFI on SPI</h3>
<p>The documentation for this can properly be found on the Solid Run Developer
Center<sup><a href="#r2" >[2]</a></sup>, but I'll be repeating here, mostly
because I've had issues with a few of the options.</p>

<p>Firstly, regarding the different options for obtaining a flash image, I'll
just say that I've tried the docker image, and I've tried compiling natively on
the MACCHIATObin, but both of these ran into issues. The docker image ran into a
syntax error<sup><a href="#r3" >[3]</a></sup> and the native build had some
issues when running Python tests, namely with
<code>codec.lookup('ucs-2')</code>, saying it couldn't find the codec.
Ultimately both errors are Python problems. Coincidence? I think not! But I'll
forget about my disliking of Python for now and get on with this guide.</p>

<p>So really, the best option is to use the pre-built binary, which is SPI
specific.<sup><a href="#r4" >[4]</a></sup> Once you have this, you're gonna want
to save it to the USB storage device using a FAT32 formatted partition. If
you're reading this sort of guide you should already know how to format a USB
storage device, but I'll remind you that you don't only have to format the
partition with <code>mkfs.vfat -F 32 &lt;partition&gt;</code>, but you actually
also have to set the partition type to FAT32 when creating the partition with
<code>fdisk</code> (or similar tools). I say this because I forgot to do this,
and wasted some time here.</p>

<p>Once you have this done, copy the image binary onto the newly formatted
storage device. You can either keep the name of <code>uefi-mcbin-spi.bin</code>
or you can change it to <code>flash-image.bin</code>, which is the filename used
in the Solid Run documentation for flashing to SPI from U-Boot. Your choice,
just make sure to take it into consideration. I'll use
<code>uefi-mcbin-spi.bin</code> since that's what I used anyways.</p>

<p>Now that this is done, it's time to flash the image to the SPI. To do this,
insert the USB storage device into the USB 3.0 slot on the MACCHIATObin, and
insert the SD card with ArchLinuxARM (and U-Boot) into the SD card slot. Set the
jumpers to boot from the SD card. Connect to the MACCHIATObin via serial USB.
Finally, boot the machine and make sure to interrupt the boot process (when
prompted) to enter the U-Boot console. From here, we'll be running the
instructions for installing an image to the SPI Flash via U-Boot found in the
documentation,<sup><a href="#r5" >[5]</a></sup> modifying, of course, for the
filename:</p>

<code><pre>
usb start
load usb 0:1 $kernel_addr_r uefi-mcbin-spi.bin
sf probe
sf write $kernel_addr_r 0 0x$filesize
</pre></code>

<p>To test to see if this has worked, turn off the MACCHIATObin, switch the
jumpers to boot from SPI, and check to see if you get a UEFI prompt. This should
appear not only if you start up in a serial console, but also on a screen if you
have everything hooked up with the graphics card. If you do see a prompt, then
all has worked as expected. If you don't, try doing this process a few more
times. It gave me some weird errors the first few times I tried, and then
magically it started working after what must've been the third time.</p>

<h3>Installing ArchLinuxARM</h3>
<p>I wanted to note that I have uploaded a video to Odysee demonstrating how to
do this step.<sup><a href="#r10" >[10]</a></sup></p>

<h4>Preparing the Installation Media</h4>
<p>Since we're going for a desktop setup, the ideal is to install the entire OS
onto a hard drive connected via one of the SATA ports. The issue here isn't so
much the installation itself, but the live OS used to install it. The reason is
that ArchLinuxARM does not currently provide images, much less images configured
for UEFI boot. If the SD card we've used earlier provides access to an internet
connection as well as to the hard drive you wish to install on, then use that.
If not, you'll have to get a live image of some other distribution to boot from
that supports UEFI and can access the hard drive. In my case, I used the Debian
ARM64 image (<em>not netinst!</em>).<sup><a href="#r6" >[6]</a></sup> Since it
is an installation media, I had to install it from a USB stick onto a SD card
to finally work from the SD card to install ArchLinuxARM to the hard drive.</p>

<p>Regardless of the image you choose to use, make sure you can install the Arch
Install Scripts (usually <code>arch-install-scripts</code>), as it's going to
make your life easier to use <code>genfstab</code> and
<code>arch-chroot</code>.</p>

<h4>Installation &amp; Configuration</h4>
<p>If you're familiar with the installation process of normal ArchLinux (amd64)
or some other more manual installation process, such as Gentoo, then from this
point on everything should be quite familiar. First, partition the hard drive
with the partitions you want and format them; then mount the partitions in the
structure you want (e.g. home partition mounted as <code>/mnt/home</code>);
finally we populate the filesystem with the files we want. Whereas the ArchLinux
Installation Guide tells us to use <code>pacstrap</code>, it doesn't make much
sense for us to use this. So instead, we'll be using the tarball provided by
ArchLinuxARM for aarch64 platforms.<sup><a href="#r7" >[7]</a></sup> Simply
extract the tarball over the mounted root directory to populate everything. This
step replaces <code>pacstrap</code>. After this you can basically follow the
ArchLinux Installation Guide<sup><a href="#r8" >[8]</a></sup> The only step that
will be different is when we install our boot loader.</p>

<h4>Installing the Boot Loader (GRUB)</h4>
<p>This step has a small trick to it. The process is for the most part exactly
the same as what is described in the instructions found on the
ArchWiki,<sup><a href="#r9" >[9]</a></sup> with an extra step right before
running the <code>grub-mkconfig</code> command.</p>

<p>If you try running <code>grub-mkconfig</code>, you'll notice that it doesn't
create any entries for the OS we've just installed. This is because the kernel
in ArchLinuxARM uses the filename <code>Image</code>, which the image finder of
<code>grub-mkconfig</code> doesn't recognize. As you can imagine, this can be
solved by just making a simple symbolic link to the kernel file with a filename
that is recognized. In my case, I simply created a link named
<code>vmlinuz-linux</code> as appears on my x86_64 machine:</p>

<code><pre>
cd /boot
ln -s Image vmlinuz-linux
</pre></code>

<h3>Reboot</h3>
<p>At this point, the OS should be properly installed, and you should be able to
reboot the machine into ArchLinuxARM from UEFI on your MACCHIATObin. Do make
sure to remove whatever live media you were using for the installation.</p>

<p>Happy hacking!</p>

<h3>References</h3>
<ol class="refs" >
	<li id="r1" >
		<a href="https://archlinuxarm.org/platforms/armv8/marvell/macchiatobin"
		   target="_blank" >
		   MACCHIATObin - Arch Linux ARM
		</a>
	</li>
	<li id="r2" >
		<a href="https://developer.solid-run.com/knowledge-base/armada-8040-uefi/"
		   target="_blank" >
		   Armada 8040 UEFI - Solid Run
		</a>
	</li>
	<li id="r3" >
		<a href="https://github.com/Josua-SR/boot-builder/issues/1"
		   target="_blank" >
		   Syntax Error when Fetching Sources for UEFI Build - Issue #1 -
		   Josua-SR/boot-builder - GitHub
		</a>
	</li>
	<li id="r4" >
		<a href="https://images.solid-run.com/8040/UEFI"
		   target="_blank" >
		   SolidRun Images: 8040/UEFI
		</a>
	</li>
	<li id="r5" >
		<a href="https://developer.solid-run.com/knowledge-base/armada-8040-machiatobin-u-boot-and-atf/#to-spi-flash"
		   target="_blank" >
		   Armada 8040 U-Boot and ATF: to SPI Flash - Solid Run
		</a>
	</li>
	<li id="r6" >
		<a href="https://cdimage.debian.org/debian-cd/current/arm64/iso-dvd/"
		   target="_blank" >
		   Index of /debian-cd/current/arm64/iso-dvd
		</a>
	</li>
	<li id="r7" >
		<a href="https://archlinuxarm.org/platforms/armv8/generic"
		   target="_blank" >
		   Generic AArch64 Installation
		</a>
	</li>
	<li id="r8" >
		<a href="https://wiki.archlinux.org/title/installation_guide"
		   target="_blank" >
		   Installation guide - ArchWiki
		</a>
	</li>
	<li id="r9" >
		<a href="https://wiki.archlinux.org/title/GRUB#UEFI_systems"
		   target="_blank" >
		   GRUB: UEFI systems - ArchWiki
		</a>
	</li>
	<li id="r10" >
		<a href="https://odysee.com/@nortega:7/creating-an-archlinuxarm-uefi-bootable-device:c?r=9yQ7qWBPvX2ofwhQe1dHpXXZuevgFeSp"
		   target="_blank" >
		   "Creating an ArchLinuxARM UEFI Bootable Device" on Odysee
		</a>
	</li>
</ol>

<?php
require 'templates/blog-footer.php';
?>