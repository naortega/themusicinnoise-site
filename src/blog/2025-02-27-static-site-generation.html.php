<?php
require 'config.php';
require '2025-02-27-static-site-generation.cfg.php';
require 'templates/blog-header.php';
?>

<p>
Over the course of the decade (maybe more) that this website has been around
I've gone through a few different frameworks and infrastructure for it. Although
usually this would be going back-and-forth between PHP and some static site
generator. For a while I've used Saait,<sup><a href="#r1" >[1]</a></sup> which
was perfect for my goal of simplicity, but was not at all flexible enough for
what I wanted. It seems to be intended for a website that contains a single page
and then a bunch of blog posts (not my setup), and so for a while I had a
somewhat jury-rigged setup.
</p>

<p>
Seeing this as an issue, I decided to try my hand at writing my own static site
generator. There were a few failed projects like this, but I normally ran into a
few errors normally because of the language I would try to write the program in.
There was a time where I would try in Rust just for the heck of it, but I would
get bogged down by the compiler whining at me. Later I would try again in Bash,
but that was silly because of all the limitations that Bash presents (even Saait
isn't written completely in Bash). I finally started working on one in C (in a
private repository at the moment), but at this point in my life I'm much too
busy to actually work much on it.
</p>

<p>
Ultimately, with all this going on, I decided it was time to try out static site
generation with PHP. Confused? Just run the PHP program on one of your PHP
scripts. It outputs the exact same thing. All I needed to do really was to write
a script that would go through all the PHP code in my website and output it as
an HTML file (or XML in the case of RSS and Atom feeds). The only caveat was
going to be my blog, which could get messy because of how I would need to access
certain metadata about my blog posts (e.g. title or date) in order to generate
both the blog page (to generate the page automatically) or the RSS and Atom
feeds. This I solved by simply having files suffixed with <code>.cfg.php</code>
which would not be processed.
</p>

<p>
All this added up to the <code>phpsg.sh</code> script<sup><a href="r2">[2]</a></sup>,
which I had added to my repository. It's licensed under the Zlib license, if you
want to use it for your own websites. Hopefully I may continue to develop my
static site generator in C, but until that's done, this is a decent substitute.
</p>

<ol class="refs" >
	<li id="r1" ><a href="https://codemadness.org/saait.html" target="_blank" >Saait: a boring HTML page generator - Codemadness</a></li>
	<li id="r2" ><a href="https://code.ortegas.org/nortega/themusicinnoise-site/src/commit/07527f8e33aa6ed2ffc303c971f383190a7925aa/phpsg.sh" target="_blank" >themusicinnoise-site/phpsg.sh at 07527f8e33aa6ed2ffc303c971f383190a7925aa - themusicinnoise-site - Ortega Code</a></li>
</ol>

<?php
require 'templates/blog-footer.php';
?>
