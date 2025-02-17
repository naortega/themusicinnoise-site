<?php
require 'config.php';
require '2016-07-18-my-favorite-firefox-addons.cfg.php';
require 'templates/blog-header.php';
?>
<p>I use Firefox on a regular basis as my default browser, and something that
I really enjoy about it is the vast number of addons (especially for
developers) which can be hard to find anywhere else. These addons range
from privacy guards, to custom CSS themes across all websites, to other fun
little addons that just make my life easier. So here goes a small list of
my favorites.</p>

<p><a href="https://addons.mozilla.org/en-US/firefox/addon/expire-history-by-days/?src=api" target="_blank" ><u>Expire history by days</u></a>: This one took me a while to find. Basically, I want my history to be
auto-deleted, but I don't want it <b>all</b> deleted (which is why I didn't
just use private browsing mode). This is because I use my browser history
often to look up things I did previously. So what this addon does is to
delete history after a certain amount of days. Firefox by default already
deletes your history after a certain amount of pages, but that's too
unreliable for me, I'd rather know the number of days.</p>

<p><a href="https://github.com/gorhill/uBlock" target="_blank" ><u>uBlock Origin</u></a>: It's like an ad-blocker, but free-software and more. It also protects your
privacy and has filters for malware domains as well as other things. Since
I've been using this I still haven't seen any ads, so the quality is at
least as good as the normal ad blockers (not taking into account how it
does more).</p>

<p><a href="https://www.eff.org/privacybadger" target="_blank" ><u>Privacy Badger</u></a>: This addon protects your online privacy (given the right habits) by
blocking ads that may be tracking you along with other trackers that you
may not be aware of. It does this through disabling JavaScript and cookies
to keep your online identity safe.</p>

<p><a href="http://fasezero.com/" target="_blank" ><u>Tab Groups</u></a>: Firefox recently got rid of one of my favorite features, the tab groups.
Luckily this guy decided to make a plugin for it! Now I continue to have
tab groups which I used before.</p>

<p><a href="https://github.com/dillbyrne/random-agent-spoofer" target="_blank" ><u>Random Agent Spoofer</u></a>: This is definitely a favorite of mine. Basically, when you send an HTTP/S
request to a server you also send a header to the server exposing details
about your OS, browser, resolution, architecture, etc. Many sites can use
this to their advantage by tracking your specific header information across
multiple sites (among other things, of course). Random Agent Spoofer will
change your online identity to a large variety of presets (from desktops,
to mobiles, to game consoles) with a ton of different browsers and browser
versions. You can also set it so that it will change your identity at
intervals (or random intervals) or even every time you send a request. You
can also use it to disable several other things that may be used to track
you (just look in the Options tab and start blocking stuff). Be aware that
you may experience some strange things while browsing, as many sites will
think you are a mobile device, or you may have disabled special fonts, or
some other option, so be aware of the options you disable.</p>

<p><a href="https://noscript.net/" target="_blank" ><u>NoScript</u></a>: This nice little addon disables JavaScript by default, and you have to
enable them manually by domain. This can be used to disable unwanted
JavaScript that may be tracking you (or in general just making your browser
slow). You can choose the 'Enable Scripts Globally' option in the menu, but
that would defeat the purpose of having it.</p>

<p><a href="https://userstyles.org/" target="_blank" ><u>Stylish</u></a>: I was suggested this addon by a friend. This addon can be used to override
a site's CSS and replace it with your own style. In my case I love dark
styles since it's easier on my eyes, so I got the 'Solarized Dark
Everywhere' style. It makes every site much easier to look at.</p>

<p><a href="https://addons.mozilla.org/en-US/firefox/addon/self-destructing-cookies/?src=api" target="_blank" ><u>Self-Destructing Cookies</u></a>: As the name indicates, this addon destroys your cookies. Cookies can often
be used to track you (as long as the cookie matches, it's the same user).
Therefore this addon will destroy cookies in one of three different
instances (that is defined by you):</p>
<ul>
	<li>After you close its tab (default): after the page to which the cookie
	belongs is closed it will be deleted.</li>
	<li>After you close the browser: the cookie will remain until your browser
	is closed.</li>
	<li>Never: It will never delete that site's cookies.</li>
</ul>
<p>You determine this setting by page (it's not applied globally), and the
default for all pages is always the first, 'after you close its tab'.</p>

<p><a href="https://github.com/akhodakivskiy/VimFx" target="_blank" ><u>VimFX</u></a>: Last but certainly not least, is VimFx. As you can guess by its name, it
allows me to use the Vim keyboard shortcuts but in Firefox (well, a little
modified since it's for a browser and not an editor). I really enjoy this
because I don't like having to use my mouse for just about anything. The
feature I use the most is the 'follow' command (using the 'f' key) which
will bind all the links visible in the browser to a key (or key
combination) that when pressed will follow that link.</p>

<p>This is something amazing for someone like me who hates using the mouse,
now I barely ever use it at all (I already use keyboard shortcuts for most
other applications I use).</p>

<p>I hope this was helpful for some people. These are definitely some of the
best plugins I've come across.</p>

<p><b>EDIT 2018/06/24:</b> You may have noticed that some of these addons no longer work with newer versions of Firefox. This is why I've moved to Waterfox, which keeps the old addon system.</p>


<?php
require 'templates/blog-footer.php';
?>