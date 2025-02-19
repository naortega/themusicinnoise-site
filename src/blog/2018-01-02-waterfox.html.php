<?php
require 'config.php';
require '2018-01-02-waterfox.cfg.php';
require 'templates/blog-header.php';
?>
<p>For any of you that have been using Firefox for quite some time now with your abundance of addons, you've probably noticed that most of them are no longer compatible with the newest Firefox 57 (Quantum). This is because Firefox has changed their addon system.</p>

<p>For me this was a big issue, considering that a couple of my favourite addons were not available with the new Firefox version and the developers had no intentions of updating them (these being <a href="https://github.com/dillbyrne/random-agent-spoofer" target="_blank" >Random Agent Spoofer</a> and <a href="https://github.com/akhodakivskiy/VimFx" target="_blank" >VimFX</a>). So at first I did what most people did and tried to find alternative addons, unfortunately none of them seemed to fit. For Random Agent Spoofer there wasn't any addon that would change profiles at random intervals, and with the VimFX alternatives there weren't any that quite fit (which is quite important considering how essential that addon is for my web navigation).</p>

<p>Because of this I decided to ditch Firefox in favour of one of its forks: <a href="http://www.palemoon.org/" target="_blank" >Palemoon</a>. This solved the issue for the Random Agent Spoofer, but not VimFX, so I used Palemoon for a bit with <a href="http://vimperator.org/vimperator.html" target="_blank" >Vimperator</a>, which was also not exactly what I was looking for but it was at least similar enough to VimFX.</p>

<p>Then, one day I posted a screenshot of my browser on #gnu in reference to something about pastebin, and someone noted that I use Palemoon. I mentioned that I wanted to use the older addons and I was recommended the browser <a href="https://www.waterfoxproject.org/" target="_blank" >Waterfox</a>. It's a fork of the modern Firefox with full compatibility for my addons and they have already mentioned that <a href="https://www.waterfoxproject.org/blog/waterfox-55.0-release-download" target="_blank" >they are going to try to maintain support for the older addons</a>.</p>

<p>Therefore, as of now, I'm a Waterfox user. If you use Arch <a href="https://aur.archlinux.org/packages/waterfox-bin" target="_blank" >you can find Waterfox in the AUR</a>.</p>


<?php
require 'templates/blog-footer.php';
?>