<?php
require 'config.php';
require '2017-09-04-why-macos-sucks.cfg.php';
require 'templates/blog-header.php';
?>
<p>As promised, a criticism of Apple MacOS (or whatever people are calling it nowadays), of course, this will mostly be mixed in with issues I have with Apple itself, and some of them may sound familiar (because they're the same as with Windows). I'd also like to note that I haven't seen or used a Mac computer for personal use for maybe 7 years, so the information I provide may be antiquated, or I may be leaving stuff out that they came up with recently (or simply I forgot because of how bad it was). So let's jump into this!</p>

<ol>
	<li><b>User Lock In:</b> This is one of my largest complaints about Apple and all they do. At least with Microsoft they tend to have to make things compatible across the board or face the fact that no one will use their bad software, but with Apple this just isn't the case (primarily due to the horde of zombies that follow them like a cult). When you buy a product from Apple, it will always work best with other Apple products, and give you complete and utter hell with anything else (unlike Microsoft which is just bad overall). I believe I've mentioned this before, but the entire reason I started advocating for open-source, and later free software, is because of an Apple iPod that would not sync nicely with GNU/Linux because of some stupid journaling system that could only be disabled on a Mac.</li>
	<li><b>No Choice in Desktop Environment:</b> I believe I pointed this out with Windows too, but I like simple, basic, tiled window managers. I don't want a bunch of applications running in the background that I'm not at all going to use. It's a waste of my resources. Mac gives absolutely no choice in this from what I recall.</li>
	<li><b>Not Package Manager Centric:</b> I can't say that Apple doesn't have a package manager, it has homebrew (unlike Microsoft Windows that hasn't caught up in that regard yet). However, the package manager is almost exclusively used by developers, and therefore does not help in users using dynamically linked libraries for their programs rather than developers having to statically link everything (and therefore cause people to have 20 copies of the same version of a library on their computer). What's more, even the app store that exists is terrible because Apple controls everything that appears there, you can't add extra third-party repos, nothing.</li>
	<li><b>No Minimal Install:</b> Just like Windows, I have never seen a minimal installation, and I've never seen a Mac in console mode which makes me question whether it even has one.</li>
</ol>

<p>As you can see, I have less complaints about Apple Mac than I do Windows, which is not surprising considering that Mac is a UNIX-like system based upon BSD. Still, I wouldn't use it.</p>


<?php
require 'templates/blog-footer.php';
?>