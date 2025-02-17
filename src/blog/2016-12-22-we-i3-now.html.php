<?php
require 'config.php';
require '2016-12-22-we-i3-now.cfg.php';
require 'templates/blog-header.php';
?>
<p>So, in a previous post I spoke about how I use GNOME as my DE, and I explained that it's mostly because I didn't want to have to got through the hassle of setting up a more minimal WM to make it usable. Well, recently a friend helped me to setup a new WM, so from now on I'll be using i3, the tiled WM. I've found that this WM makes my life much easier than GNOME did, mostly because in this WM I can easily open terminals via `MOD+Enter' and I barely ever have to use the mouse. In fact, because I don't have to move around windows (which could be done with the keyboard in GNOME, but it took forever) I rarely use the mouse at all, that and I've configured everything to use the Vim key bindings (that is, instead of `jkl;', which are default, I use `hjkl').</p>

<p>Of course, there were a couple of things that I needed, since i3 doesn't automatically give you all the programs to make your computer work you will need to choose applications on your own. For networking I'm using wicd, it has GUI and CLI interfaces. I'm fine with keeping the GUI interface for that since I rarely have to touch it. For audio I've switched to using alsamixer and pavucontrol, however, with the volume being printed in the status bar I rarely have to use these.</p>

<p>These are simply the most essential applications, as for other stuff, I continue to use ibus for my Input Methods, but I've setup some key bindings within i3 for them (still use mozc for Japanese IME). I'm also using xpdf for PDF viewing and gpicview for image viewing. Since before I've already used mpv for watching videos, so that hasn't been a problem. Since I'm also used to the GNOME terminal I had to find another terminal emulator, so I ended up going with lxterminal which is pretty similar. Also, if you want a background you can use feh.</p>

<p>The reason why I chose most of this software is because they have relatively low dependencies, I did not want programs with large dependencies that go all over the place, much less GNOME or KDE dependencies. All these should be available in the Debian Testing repositories.</p>

<p>So yes, now the "Deathsbreed uses all CLI because he spends half his RAM on his DE" meme is over.</p>


<?php
require 'templates/blog-footer.php';
?>