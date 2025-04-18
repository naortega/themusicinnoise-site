<?php
require 'config.php';
require '2018-06-27-blog-upgrade.cfg.php';
require 'templates/blog-header.php';
?>
<p>Recently I've decided to change how my blog works to make it easier to manage. Now I'm using databases to store my posts. Using a database has provided me more versatility than simple PHP files, which is what I used before. This has also drastically diminished the amount of files necessary for my blog as well as certain redundancies that were annoying me.</p>

<p>With this I've been able to add other stuff, like a post description, as well as not having to choose between categories and a unified RSS feed. This also means that it'll be very easy to add new things, since the DB automates a lot of things for me, and I'd only have to edit a few files instead of all my posts like I would have before.</p>

<p>Yes, I realize this breaks links from before, but whatever, I do this a lot, and my domain is still the same.</p>


<?php
require 'templates/blog-footer.php';
?>