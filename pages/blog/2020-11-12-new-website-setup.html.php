<?php
require 'config.php';
require '2020-11-12-new-website-setup.cfg.php';
require 'templates/blog-header.php';
?>
<p>So the date on this post may be wrong by the time you're reading it,
mostly because I'm not sure when I'm gonna be done setting up the
server, but I hope it's today. However, you probably will have noticed
(if you visit my website somewhat regularly) that a lot has changed.
It's the migration I was talking about a few posts ago.</p>

<p>To start, let me explain the change in framework: something I've been
thinking about lately is the vulnerability of my blog posts, which
before were stored in a database file on my VPS. If for any reason I
were to lose that data, I'd lose all the blog posts. I was also
frustrated with the complicated way of posting new articles that I had
setup: I'd write the post in an HTML file on my computer, and then I'd
login to my hand-made dashboard on my website, to post it there with all
the relevant fields. It seemed like a lot of double work that could be
easily simplified.</p>

<p>Luckily for me, due to recent developments with my VPS host, I'm
moving services, and I figured I'd take advantage of this to start
fresh. So I decided I'd port my website to a static site generator.
Originally I was going to use one I had recently created, called
<a href="https://gitlab.com/naortega/sssg" target="_blank">sssg</a>, but
as I was developing some of the more complex features for it, I
discovered that a simple SSG already existed with enough features to
give me what I needed:
<a href="https://git.codemadness.org/saait/file/README.html" >saait</a>.
It's quite minimalist and yet it provides me with the features necessary
to host all my website's content, such as my blog and news feeds. Now
it's all statically generated, so all you're pulling is pre-compiled
HTML, and not generated on the spot by a PHP script as it was
before.</p>

<p>So, since I'm excited about all the changes I have to my website, I'm
going to explain the setup (for the most part).</p>

<p>First, as I've already explained, my website is generated statically
with saait on my personal computer. I will likely be creating a git
repository where I can host the source for you all to see, since that
will also allow me to easily edit my website code from my other
computers. Second, I synchronize my website's generated files with the
server with RSync. As for the HTTP server I'm using, I've chosen to use
lighttpd for simplicity's sake.</p>

<p>I also now have two different modes of newsfeed: Atom and RSS. I also
noticed, as someone who uses newsfeeds for a lot websites, that I enjoy
those that have the content in the newsfeed itself so I don't have to
open up the browser, but can read it right inside my newsfeed
application - which, as I mentioned in a previous article, is newsboat -
so now for both Atom and RSS feed the entire content of my blog posts is
in the newsfeed item itself. If this does present a problem later on, I
can change it to only give the description, which will make the XML
files lighter to download - currently the Atom feed is 468KB and the RSS
feed 440KB, so I don't think it's too much to download.</p>

<p>All in all, I'm quite happy with the way things have turned out, so I
hope I'll be able to keep this setup for... at least a few more
years.</p>

<?php
require 'templates/blog-footer.php';
?>