<p>As I had mentioned in a previous post about ARM boards, I have
recently acquired an ASUS C201P chromebook which I have started to use
more on a daily basis. The advantages of this laptop is that it can be
run with completely free/libre software, firmware, and drivers -
although you will need a wifi adapter to avoid the proprietary wifi
card, which is kind of crap anyways. You can find the information on how
to libreboot it
<a
	href="https://libreboot.org/docs/install/c201.html"
	target="_blank" >
	here
</a>
(I had a hard time finding this, so you're welcome). It's
actually quite a simple process, and unlike other laptops where you
require all kinds of hardware flashes to install libreboot, on this the
only hardware manipulation you need is to take out a screw...
literally.</p>

<p>Then, once you have libreboot installed, you just have to install the
Linux distro. I personally prefer Arch-based distros, so that's what I
tried to install. Luckily ArchLinuxARM exists. Now one option you have
is to install the distro on an external SD card, which is what the
<a
	 href="https://archlinuxarm.org/platforms/armv7/rockchip/asus-chromebook-flip-c100p"
	 target="_blank" >
	 installation guide
</a>
shows you how to do. However, what I wanted to do - and what I've done -
is to install it on the internal eMMC.</p>

<p>So, why would you want to install your OS onto the internal eMMC?
Firstly, so you don't have to manually tell the laptop to boot into the
external SD slot every time you boot up, for fear of accidentally
booting into the horror that is ChromeOS. But secondly because the
internal eMMC is much faster than your external SD, so startup speeds
are very nice.</p>

<p>One option you have in order to install a Linux distro onto the eMMC
is to use something like
<a
	  href="https://github.com/SolidHal/PrawnOS"
	  target="_blank" >
	  PrawnOS
</a>
which is built specifically for the ASUS C201. However, this is debian
based. However, simply using the ArchLinuxARM instructions verbatim that
are meant for an external SD on the eMMC is not going to work either -
trust me, I've tried. So I was considering what the rest of my laptop's
life was gonna be like, having to always be ready to press the right key
combination on startup for fear of booting into an OS so bad, it's only
slightly better than Windows. That was, until I remembered that I had a
friend who had installed PrawnOS on his ASUS C201's eMMC. Why was this
important? It meant that I could see how PrawnOS partitions the eMMC,
and simply copy that.</p>

<p>Therefore, if you want to install ArchLinuxARM on the eMMC, you've
got to use the following partition setup:</p>

<code>
	Disk /dev/mmcblk2: 14.7 GiB, 15762194432 bytes, 30785536 sectors<br />
	Units: sectors of 1 * 512 = 512 bytes<br />
	Sector size (logical/physical): 512 bytes / 512 bytes<br />
	I/O size (minimum/optimal): 512 bytes / 512 bytes<br />
	Disklabel type: gpt<br />
	Disk identifier: 5CD647E1-DAD1-4E4A-B9D5-F87D00D1DCAE<br />
	<br />
	Device         Start      End  Sectors  Size Type<br />
	/dev/mmcblk2p1 20480    86015    65536   32M ChromeOS kernel<br />
	/dev/mmcblk2p2 86016 30785501 30699486 14.7G Microsoft basic data<br />
</code>

<p>The main thing you gotta pay attention to here are the sectors.</p>

<p>Anyways, you're almost done. The only thing that's left is... to
compile a custom kernel. Yup, wasn't gonna be that easy. Luckily,
there's a guy who setup a <code>PKGBUILD</code> that builds everything
for you more or less automatically. Although I will warn you that it has
a lot of drivers disabled, such as the Atheros ones. So if you want
those enabled you'll have to uncomment a line in the
<code>PKGBUILD</code> file that says <code>make menuconfig</code> so
that during the build process you can enable the needed drivers or
modules. And trust me, there are a lot of them you may want to
enable.</p>

<p>After this, if I haven't forgotten anything, it should work... I
hope. At least it works for me.</p>

