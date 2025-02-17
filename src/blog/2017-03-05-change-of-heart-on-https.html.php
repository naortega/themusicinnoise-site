<?php
require 'config.php';
require '2017-03-05-change-of-heart-on-https.cfg.php';
require 'templates/blog-header.php';
?>
<p>A while back I wrote a blog post on HTTPS and how it is not necessary for all websites, however I have recently had a change of heart on the issue. Back when I wrote about it I did not think a step further which would have lead me to see the importance of HTTPS even for a static site like mine. You'll notice that you are connecting to this website via HTTPS currently, for all HTTP requests are redirected to the HTTPS. What's more, there is also a .onion address for my site so that you may connect to it without even leaving The Onion Router network (<a href="https://uk7ewohr7xpjuaca.onion/" >uk7ewohr7xpjuaca.onion</a>).</p>

<p>The reason why even a site like mine should use HTTPS (and even a .onion address) is that the content of my site may be banned in certain countries (especially certain writings where I am quite critical with issues such as religion). However, this can even apply to those of us having even the most 'dull' of websites, let us not forget the <a href="https://www.theguardian.com/music/2013/jan/15/mali-music-ban-islamists-crushing" target="_blank" >ban on music in Mali</a>, for that everything in my `/music/' and `/audio/' directories would be banned. For this reason it is important that we protect the content that the user is trying to access so that their ISP nor their government (nor any other entity) has access to such information.</p>


<?php
require 'templates/blog-footer.php';
?>