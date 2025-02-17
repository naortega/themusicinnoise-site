<?php
require 'config.php';
require '2024-06-05-introducing-pacundo.cfg.php';
require 'templates/blog-header.php';
?>
<p>This is a bit of shameless self-promotion, but I think that anyone running an
ArchLinux machine will probably appreciate this.</p>

<p>As anyone who has run ArchLinux knows, there is a common phenomenon of
upgrading your system and things breaking. If it's just some awkward behavior of
some of the tools you can typically resolve it with ease, but there have been
times for myself when, because I use Nvidia drivers, I cannot even get my
graphical environment running and I have to revert the last upgrade. Most of the
time, however, I've had to do this manually, since I did not know of any tool
that does it, at least not the way I wanted, which is just an automatic undoing
of the last pacman transaction.</p>

<p>To remedy this problem I decided to write a hobby script that would do this
work for me based on the pacman logs, using the local cache and even the
ArchLinux Archive if the package cannot be found locally. I've even added
support for my AUR helper of choice, yay.<sup><a href="#r1" >[1]</a></sup> This
script is called pacundo and can be found in my personal
repository<sup><a href="#r2" >[2]</a></sup> as well as in the AUR for an easier
installation.<sup><a href="#r3" >[3]</a></sup></p>

<p>As of right now (pacundo v1.1) the script only supports bare pacman and yay,
but if you use a different AUR helper and want to contribute this functionality
for your favorite AUR helper, feel free to send me a patch following the
contributing guidelines.<sup><a href="#r4" >[4]</a></sup> As noted there, you
can also find a mirror of my repository on GitHub<sup><a href="#r5">[5]</a></sup>
where I can also receive issues and pull requests (but please read the notes
about pull requests that I wrote in the contributing section mentioned above).</p>

<p>Hopefully this helps out a few people to fix their ArchLinux systems. I've
also run it on Manjaro and it seems to work fine there as well, and my guess is
it should work on any ArchLinux derivative distribution.</p>

<p>God bless, and happy hacking!</p>

<h3>References</h3>
<ol class="refs" >
	<li id="r1" ><a href="https://github.com/Jguer/yay" target="_blank" >GitHub - Jguer/yay: Yet another Yogurt - An AUR Helper written in Go</a></li>
	<li id="r2" ><a href="https://code.ortegas.org/nortega/pacundo" target="_blank" >nortega/pacundo: A time machine to return your ArchLinux machine back to a working state. - pacundo - Ortega Code</a></li>
	<li id="r3" ><a href="https://aur.archlinux.org/packages/pacundo" target="_blank" >AUR - pacundo</a></li>
	<li id="r4" ><a href="https://code.ortegas.org/nortega/pacundo/src/branch/master/README.md#contributing" target="_blank" >pacundo/README.md Contributing - Ortega Code</a></li>
	<li id="r5" ><a href="https://github.com/naortega/pacundo" target="_blank" >GitHub - naortega/pacundo: [MIRROR] A time machine to roll back your ArchLinux machine to a working state.</a></li>
</ol>

<?php
require 'templates/blog-footer.php';
?>