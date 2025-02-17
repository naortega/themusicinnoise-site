<?php
require 'config.php';
require '2019-12-02-gentoo-and-how-its-useful.cfg.php';
require 'templates/blog-header.php';
?>
<p>So, for maybe several months now I've been running Gentoo as my main distribution, keeping a dual-boot with ArchLinux. This was mostly because I wanted to start using more <a href="http://suckless.org/" target="_blank" >suckless</a> software, and for that I needed to use a system where the packages are compiled so that patches can easily be applied. After considering a few options I decided to simply go with Gentoo.</p>

<p>Now, in case you're not familiar with Gentoo, it's a distribution that uses a package manager called <code>emerge</code> along with a management system called <i>portage</i> that is similar to the <i>ports</i> that some BSD distributions have. Under this system, all packages are compiled (save for some alternative binary packages ending in <code>*-bin</code>), and you have to manually configure and compile software like the Linux kernel. This has come with pros and cons.</p>

<p>The cons are quite obvious. Running Gentoo requires you to spend some time adjusting your system settings and configurations to match your hardware and software needs. A lot of people aren't accustomed to having to pay attention to what hardware they are using, or adjusting the configuration of their software to meet their needs, so this can be an adventure on its own. There's also the issue of having to wait for absolutely everything to compile. Some packages will take ages to compile, and updates can often take a half hour (with my setup which uses mostly minimalist software, if you use bloated software then prepare for longer compilation times). There are also added compilation problems that you can run into that don't occur with binary distributions.</p>

<p>However, all this doesn't remove the pros that Gentoo has, that can arguably outweigh this cons. To start, by being able to adjust your configuration to such a specific level, your system will be hyper-customized to your use case, making smaller binaries that only have the features you need. This can also lead to a much faster system, since you're only running code that needs to be run. Having everything compiled also helps you to distinguish what the bloated software is (normally the ones with a ton of dependencies or take hours to compile). So if you run mostly lightweight software then compile times won't be too bad. Finally, you also get to learn a whole lot more about your system. People often think ArchLinux is super advanced, but at least in ArchLinux you don't have to compile a kernel manually and configure it for your hardware. Not that this is hard, but it gives you certain knowledge of the system that you didn't have before.</p>

<p>So overall, I've seen it as a net-positive. Gentoo will teach you a lot more about your system along the way. It's not the best distribution for everything - I still use ArchLinux for video-games and any media applications - but it definitely has its place in the world.</p>


<?php
require 'templates/blog-footer.php';
?>