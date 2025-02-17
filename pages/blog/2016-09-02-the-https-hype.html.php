<?php
require 'config.php';
require '2016-09-02-the-https-hype.cfg.php';
require 'templates/blog-header.php';
?>
<p>Recently I've seen a lot of hype around everyone wanting to use HTTPS for absolutely everything, which is very understandable for sites like social networks and especially for financing websites. However, it's gotten to the point where people want an HTTPS website for no reason, for example, this site having an HTTPS protocol would serve <b>no purpose</b>. HTTPS only encrypts your connection to a server, but that's only useful if personal information or logins/passwords are involved. This website gives neither personalized pages nor requires any logins/passwords, therefore any reason to add HTTPS support to my website that I have seen makes no sense.</p>

<p>So it seems like the hype over HTTPS is simply a blind belief that "because it's HTTPS it's secure and private", when in reality my website gives away <b>no sensitive information</b> through HTTP that it wouldn't give away through HTTPS. If you want to protect your identity online then HTTPS won't do anything, you want to be using the <a href="https://www.torproject.org/projects/torbrowser.html.en" target="_blank" >Tor Browser</a> to hide your online identity. The only things that might be exposed are things like your HTTP header, which I don't feel bad for you if you're not using an identity spoofer like I mentioned in my blog post about my favorite Firefox add-ons.</p>

<p>So usually this wouldn't bother me that much, people do stupid things for no reason all the time. The problem with it this time is that it seems people are beginning to not trust sites that do not have HTTPS even though they may be like mine where there is no reason to use it, and it wouldn't surprise me if browsers began to adopt a 'HTTPS-only' policy soon because of this (seeing that users matter more than actual reasonable arguments most of the time).</p>

<p>You know a site that does need HTTPS? My comrade <a href="http://www.bkeys.org/" target="_blank" >bkeys' website</a>. He has logins, uploads, and a ton of other stuff that should be encrypted. Not only that, but because he has HTTP login forms <a href="http://thenextweb.com/apps/2015/10/21/firefox-is-testing-marking-any-page-that-sends-passwords-over-http-as-insecure/" target="_blank" >which Firefox will soon be marking as unsafe</a> which might cause some issues as this HTTPS hype progresses for him, they'll probably end up banning such connections.</p>

<p>Basically, HTTPS is a good thing in general, but stop trying to force it down website admins' throats.</p>

<p><b>EDIT 2017/03/06:</b> I have recently changed my views on this issue, and have another post on this.</p>


<?php
require 'templates/blog-footer.php';
?>