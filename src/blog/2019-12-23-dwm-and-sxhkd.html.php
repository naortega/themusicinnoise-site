<?php
require 'config.php';
require '2019-12-23-dwm-and-sxhkd.cfg.php';
require 'templates/blog-header.php';
?>
<p>So in my last post about Suckless I mentioned something about creating a patches page for my mods to dwm. Well, this is no longer necessary. The reason I made this was because I wanted to be able to have more key-binds to run certain applications, not just interact with the window manager. It was somewhat difficult to implement this in a modular way that each patch added different key-binds (e.g. one patch for cmus commands, another for brightness, etc.). Luckily I found a video where they mentioned a universal key-bind program called <code>sxhkd</code> ("Simple X Hot-Key Daemon"). This automatically made my life infinitely better, since now all I needed was a separate config file for just that one application that would handle all my key-binds.</p>

<p>I'd like to underline how this is truly an example of the UNIX way of doing things. Instead of concentrating all these tasks into a single application, each application is highly specialized to a specific task, it's small, and it does this task well. In this case, rather than having dwm manage all this, <code>sxhkd</code> is managing my key-binds and only my key-binds. If I wish to change to another window manager, I don't have to worry about my key-binds since they're managed by a completely different application.</p>


<?php
require 'templates/blog-footer.php';
?>