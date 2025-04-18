<?php
require 'config.php';
require '2017-01-13-parabola-gnu-linux-libre.cfg.php';
require 'templates/blog-header.php';
?>
<p>Recently I have made a switch to <a href="https://www.parabola.nu/" target="_blank" >Parabola GNU/Linux-Libre</a>, one the <a href="https://www.gnu.org/distros/free-distros.html" target="_blank" >free GNU/Linux distributions</a> (the others use the standard Linux kernel which has non-free blobs for drivers, as well as distributing non-free firmware). I made the switch after receiving a WiFi adapter that respects freedom, since the only component of my laptop that required non-free drivers and firmware was my wireless card. The reason I chose Parabola of all the free distros is because Parabola has the most up-to-date packages (unlike, for example, Trisquel which is based on the Ubuntu LTS, or gNewSense which is based on Debian Stable).</p>

<p>The reason for switching to Parabola from Debian is because Debian, although it can be de-blobbed, I have not liked how they do their software segregation. One would think that `non-free' would be for non-free software or free software that depends on non-free software (unless they put the free part in `contrib', as they do with the AssaultCube package), yet when I was looking for the firmware for my wireless card I was surprised to find that it was in `non-free' along with all the others. I quickly began looking up the firmware to see if I could find source code and what license it was under. But no, the firmware is 100% Free Software, Debian just put them in a non-free package with other non-free software that are completely unnecessary forcing anyone who wants to use the free firmware to also download the non-free firmware along with it.</p>

<p>Another reason is because by using a free distro it is easier to promote Free Software, especially since there's nothing I could install from the repos that would be non-free. I also now have a very nice package called `your-freedom', which, if I were to install a non-free package, it will "conflict with `your-freedom'" and ask "Are you sure you would like to remove `your-freedom'?". Something that I find rather hilarious and funny, yet very useful so you don't have to worry about if a package is Free Software or not (because `your-freedom' will take care of that for you).</p>

<p>I still have not overwritten my Windows drive because I currently still need it for video conferencing (you know, to talk to family and friends), however I believe I found found a solution to this, and I will post about it later when I confirm it as a proper solution. Once I have confirmed it as a solution and have gotten my family and friends to switch to it I will be overwriting my Windows drive most likely with Trisquel.</p>


<?php
require 'templates/blog-footer.php';
?>