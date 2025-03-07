<?php
require 'config.php';
require '2016-07-22-new-website-design.cfg.php';
require 'templates/blog-header.php';
?>
<p>As you can see I've changed up the site quite a bit. Now we're back to running on PHP (no longer using Jekyll). I enjoy this theme much more as it reflects my interests (I put all that I can in the terminal, I'm writing this very post in the terminal using the Vim editor) and it also stands against the picture pretty websites that you see nowadays. You will not see anything on this site that is not pure text, it may be underlined, bold, or a hyperlink, but it will be text, like in a terminal (not the Enlightenment terminal, though, that thing's really weird). Of course, the source to my website is still available on Github and it's all up to date.</p>

<p>Despite moving towards a system that I had to program myself and now having to write my posts in HTML with a little PHP at the beginning and end, this will actually make it easier for me to upload the posts. Previously with Jekyll I had to upload three different files every time I wanted to post something (the index page, the feed.xml, and the post itself), now, although I do not have an atom feed, I only have to upload the new post because the PHP automatically detects it and adds it to the list (Jekyll was not running on my server).</p>

<p>Either way, I plan on keeping this for quite a while since it looks cool, was easy to make, and is pretty sustainable long-term. Again, don't expect to see any pictures here, if I add pictures it will be links to the picture located on either this server or an external one (I want to keep the theme going, so nothing but text will be on the actual pages).</p>


<?php
require 'templates/blog-footer.php';
?>