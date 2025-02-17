<?php
require 'config.php';
require '2020-10-06-rss:-decentralized-subscriptions.cfg.php';
require 'templates/blog-header.php';
?>
<p>For years I've had an RSS feed for my blog, but I truly haven't used
RSS myself for my own subscriptions until quite recently. But since
watching the Luke Smith video on the matter<sup><a href="#r1" >[1]</a></sup>
I've decided to give it a try, and it has definitely been worth it.</p>

<p>For those who are not aware, RSS is a standardized and universal way
of managing subscriptions that has been around since 1999 (although the
concept is older). The idea is that every site or subscription would
have an XML file that could be pulled by an RSS client, which would
contain all (recent) posts. The client would then show this data to the
user, pointing out the new/unread posts. In other words, basic
subscription stuff.</p>

<p>But what makes RSS (or Atom feeds for that matter) so great in this
regard is what it does for the user - even the least technical user.
Basically, it's the e-mail of subscriptions: a universal protocol which
you can use on any server with any client.</p>

<p>Firstly, there's the freedom on the side of the user to choose which
client to use. I personally use newsboat because it's the first
relatively simple curses client I came across, but there are tons more,
including graphical clients. This is great, since it means that we can
interface with our subscriptions however we please. I can use a
curses/terminal environment to manage my subscriptions, and someone else
can use a graphical environment. Nobody is forced to use something they
don't want to.</p>

<p>But perhaps more importantly, RSS permits the decentralization of the
web. For some reason, we've been relying on built-in subscription
features for platforms like YouTube, Twitter, Facebook, etc. - I don't
know what y'all kids are using nowadays - but this just creates a
dependency on the platform for both the user and the content creators,
ending up in a feedback loop. Users, who do not want to have accounts on
several websites for subscriptions, choose a select few platforms to
create accounts on, which have the most content or their favorite
content. Because of this, creators are forced to use those platforms if
they want to get any kind of visibility. As such, it feeds into there
being a few platforms that have the vast majority of creators and the
cycle continues. As such, these platforms naturally get to decide what
content gets to be on their platform and which content we are suggested
or get to see. It is a way of enslaving both user and creator to their
platform by creating a dependency on them. Basically, user lock-in -
what I criticize companies like Apple for.</p>

<p>With RSS, this is no longer an issue. You can actually subscribe to
everything in a single place: your RSS client. What's more, you don't
even have to go looking through the five social media sites you already
have accounts on, you just open up the one application and you have
access to all your subscriptions from any platform. This also means that
for those creators who want independence, they can create their own
website, add an RSS feed, and they'd be just as easily accessible as a
person on any other platform.</p>

<p>And perhaps more importantly, unlike other technologies I propose
which would require you to create (yet another) account and/or give up
some of the content you already enjoy, this doesn't require any such
thing. I myself, using RSS feeds, have subscriptions to YouTube
channels, podcasts, blogs, etc. and I'm fairly certain that both
Facebook and Twitter feeds have RSS/Atom feeds. The only thing you'd
have to do is install a RSS/Atom client and add your subscriptions to
it. And if you're a content creator with your own site, most (if not
all) web frameworks (like Wordpress) come with a way of adding an RSS
feed to your site.</p>

<p>The world is a much better place when we're not dependent on certain
platforms or companies. Real competition and development comes when
clients are able to move freely and at no cost from one provider to
another. And in this case, that freedom must be enjoyed by both users
and creators with regards to the platforms they use. This cannot be
achieved if using a different platform aside from the few major ones
will automatically make you irrelevant and invisible to the public eye.
We also need a world where people can have the ability to own their
creations, instead of being subjected to malicious terms of use which
tell creators what they can and cannot create, what can and cannot be
monetized, and overall taking ownership of someone's creation.</p>

<p>If you do end up using RSS, I strongly suggest also looking for
content you may enjoy on other platforms to encourage a movement away
from centralized media platforms. Look for independent sites, blogs, or
alternative platforms (e.g. Peertube as an alternative to YouTube). Talk
about these sites with your friends and family to promote them, and
hopefully we can move further away from the centralized and heavily
controlled platforms.</p>

<p>
<label id="r1" >[1]</label>
<a
	 href="https://videos.lukesmith.xyz/videos/watch/551a1bfb-8a05-4cdb-b5d3-a42758991d83"
	 target="_blank" >
	 https://videos.lukesmith.xyz/videos/watch/551a1bfb-8a05-4cdb-b5d3-a42758991d83
</a>
</p>


<?php
require 'templates/blog-footer.php';
?>