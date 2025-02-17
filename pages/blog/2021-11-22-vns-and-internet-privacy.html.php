<?php
require 'config.php';
require '2021-11-22-vns-and-internet-privacy.cfg.php';
require 'templates/blog-header.php';
?>
<p>As of late I've been seeing a lot of renewed interest for internet privacy,
particularly regarding certain social media platforms. This is, of course, not
something new. This is a struggle that's been going on for years, as you can
find even within my own blog post history there are several articles referring
to the matter, and it's an issue older than my own posts. Yet what I find
baffling is the method being proposed: the use of a VPN.</p>

<p>The purpose of a VPN is (at least for common 'privacy' usage) to hide one's
IP address. In this sense, many people simply use VPNs as a substitute for TOR
or I2P, but with a better connection and often the ability to choose the country
your VPN is located in. If you're using a VPN simply to connect to a web service
and avoid country content blocking, then a VPN is definitely a useful tool. But
if your purpose is to protect your IP address for privacy reasons, then a VPN is
practically useless especially when we're talking about social media
surveillance. If you're trying to stop Facebook, Google, or any other company
from tracking your online activity, a VPN is quite pointless. There are a few
different reasons why this is.</p>

<p>Firstly, if you're using a VPN to log into your Google or Facebook account,
then they already know who you are whether or not they know your IP address.
They have associated you with the content of your profile, and can track you
that way. Sure, they may not know the exact town you live in from your IP
address, but they do know (with more precision) from your profile and the
content you give them. Therefore, by logging into one of these accounts, you've
rendered your efforts to remain anonymous completely futile.</p>

<p>Secondly, and basing off of the previous assumption, once you've logged into
an account, or if you have cookies enabled, then you can be tracked all across
the web. It doesn't matter that you're sharing a VPN IP address with thousands
of other people, because you have a unique string that's being sent to their
servers every time you connect that identifies you uniquely. If you log into
your Google account, the Google server will store a cookie on your computer that
uniquely identifies you. This is normally used to facilitate things like
automatic logins the next time you visit the site. However, when you visit
another site that may have a Google login available, or if the page uses Google
fonts, these servers can ask for your cookies and see whether or not you have
that unique identifier, and therefore know identify you uniquely.</p>

<p>Thirdly, regardless of whether you log in to a social media account or not, a
website may still identify you by what is called your <em>digital
fingerprint</em>. Essentially, when you connect to a website, the server can
discover many characteristics about your system, and although none of these
might be unique in itself, together they can form a profile that is much more
likely to be unique to a single user, and therefore be useful for
identification. Some example of characteristics that can be found are such as
screen resolution, operating system, architecture, web engine, etc. And since
these characteristics tend to remain mostly the same, it is a reliable manner to
track someone online. There are also some websites, like
AmIUnique,<sup><a href="#r1" >[1]</a></sup> which can show you the kind of data
from your system which a web server has access to, and how unique these
characteristics are (although based on their own collection, which is a skewed
statistic).</p>

<p>On the other hand, the reason why IP address is not a reliable means of
tracking someone's activity is, not only because VPNs and other alternatives
(e.g. TOR or I2P) are available, but also simply because this will change even
if you move, change your provider, commute to work (i.e. use a different
network), or simply leave your router off for a given amount of time (normally
24 hours) for your ISP to designate you a new dynamic IP address. Companies like
Google and Facebook know this, so it's not reliable. The days when people would
almost always connect from the IP address are long gone.</p>

<p>If your interest is in protecting your privacy then a VPN is not worth it, as
it's practically useless. Instead, try looking at addons for your browser that
spoof your online fingerprint and delete the cookies stored on your computer.
But perhaps more importantly, don't use your social media accounts (e.g. Google
or Facebook) to connect to any other site than that social media site.</p>

<h2>References</h2>
<ol class="refs" >
	<li><a href="https://www.amiunique.org/fp" >AmIUnique Website</a></li>
</ol>

<?php
require 'templates/blog-footer.php';
?>