<?php
require 'config.php';
require '2020-10-27-new-site-migration.cfg.php';
require 'templates/blog-header.php';
?>
<p>I'm giving a head's up that my site is going to undergo a massive
migration (relatively) soon. I'm going to be changing servers, and I
would like to take advantage of the situation to also change the base
technology I'm using for my website.</p>

<p>For quite some time I've been using PHP, which has provided me with
quite a bit of stability. But I've started to notice how much of a
hassle it is, and how vulnerable some of the information that is not on
my home computer is (e.g. my blog posts). It's also always been somewhat
of a mess. I feel like I'm using a cannon to kill a fly. So in my quest
to minimize the complexity of the technologies I use as much as
possible, I've decided to switch to using a static site generator.</p>

<p>I'll write another blog post at some point on both the issue of
minimizing technological complexity, and the technologies I'll be using
for my website. But the important thing to note is that a lot of links
are going to be broken. Basically everything except the home page. I'm
still unsure as to when this is going to happen, I still have to finish
porting my website (including all the blog posts), and setting up the
new server. After that, I'll likely make the switch as soon as
possible.</p>

<p>I know that this is probably a hassle for whomever reads my blog (the
select few), especially since I had already done this last year. But
hopefully this is the last time I have to do this... for maybe the next
few years instead.</p>


<?php
require 'templates/blog-footer.php';
?>