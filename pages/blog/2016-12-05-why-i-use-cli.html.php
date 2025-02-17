<?php
require 'config.php';
require '2016-12-05-why-i-use-cli.cfg.php';
require 'templates/blog-header.php';
?>
<p>For those of you who don't know, CLI means Command-Line Interface. I'm a huge fan of using CLI over their GUI (Graphical User Interface) alternatives, to the extent that typically the only non-terminal windows I have open is simply one: my browser (IceCat). I would not like to switch my browser to CLI for various reasons, but everything else is. Everything else (e-mail, IRC, music, password manager, etc.) is all in the terminal. I do this for multiple reasons.</p>

<p>First one is that it's better performance. Instead of spending so many resources on other applications (like e-mail clients and music players, which tend to be rather heavy) I can reserve those resources for other applications, such as VMs or any heavy-duty program I may be running at that moment in time. Of course, I do have a small contradiction on this one which is that I use GNOME3 as my DE, which, for those of you who are not familiar with it, is a somewhat heavy DE. My excuse for this is simply that I'm used to GNOME and all of its nice keyboard shortcuts, that and its interface feels very natural and slick to me.</p>

<p>Another reason why I use CLI is to avoid using the mouse. Using the mouse usually takes me much more time than it does to type out a command or press a keybinding, and although GUI applications have keybindings, they are not as obvious or used as in the CLI alternative (sometimes you have to set the keybindings manually because they don't have defaults). Therefore CLI applications allow me to get work done much faster.</p>

<p>What I find to be much more important is that CLI is much less distracting. Being only text, no bells, no whistles, just text, I find it much easier to concentrate without notifications and beeps and noises everywhere. Of course, there are settings to disable these on GUI applications, but by default they tend to annoy me, and I prefer to keep close-to-default options so when I switch computers I don't have many issues. It also helps that I put all of my applications that I usually have up in a TMUX instance, that way it only occupies one terminal window, but also I am not distracted by what may be happening in another TMUX window. However, when I used IceDove for e-mail, apart from annoying e-mail notifications, every time I switched workspaces to change my music, if I had new mail I would see that and get distracted by it, while now with Mutt inside the same TMUX instance as my music player I never have this problem.</p>

<p>If you're interested in moving applications of yours to CLI then here's what I use for my different tasks: e-mail - Mutt, IRC - irssi, password manager - pwman3 (I suggest getting it from `pip3' instead of the system package manager), music player - cmus, to-do list - tudu. I have all of these inside of a TMUX instance. If you want to use a CLI web browser then there are browsers such as links, lynx, elinks, and w3m, of which I have only tried links(2) and elinks.</p>

<p>Now, there are some drawbacks to this, of course. One of the drawbacks is learning to use the tools, they're usually not as intuitive, however I usually find this worth it since my productivity then goes up. The second is that this can somewhat scare people away from using GNU/Linux because they think (by seeing you/me) that if you want to use GNU/Linux you also have to use CLI, which is not necessarily the case (depends mostly on the distro and installation). However, I generally do not care for this aspect as much as to change my CLI habits.</p>


<?php
require 'templates/blog-footer.php';
?>