<?php
require 'config.php';
require '2019-06-16-more-settings-less-locale.cfg.php';
require 'templates/blog-header.php';
?>
<p>I speak and use American English for all my computing because it's the English I grew up with (plus, it's typically the most complete language for any software package). Therefore, my locale is almost always set to <code>en_US</code>. This is fine for the most part (especially since most of my applications are quite minimal and configurable), but recently I've installed GNOME Calendar to start scheduling my week and found that the week starts on Sunday in GNOME Calendar. Now, although I was born in the USA, I've spent many years in Spain and have become accustomed to the week starting on Monday (which makes sense since we call Saturday and Sunday the "weekend" and not the "weekends"). So I went into the settings (which are very lacking) and did not find any setting to have the week start on Monday instead of Sunday. When I looked this up it turns out GNOME Calendar chooses which day the week starts on based on your locale, so I'd have to either change my locale to <code>en_GB</code> (therefore changing my language settings everywhere on my system to British English, and using the British Pound as the default currency) or put up with the Sunday first week format.</p>

<p>This is the problem with locales. Although it works for people who use all the settings from one country (typically people who have only lived in one country their entire lives) it sucks for having any kind of complex configuration. In my case, I want my language to be in American English, my dates to be in YYYY/MM/DD format, and my currency to be in Euros. Yet, there is no locale that will configure with all these settings. And this is probably a small part of the list. What are the solutions? Either more customizable locales (which would be a pain since locales have already been pretty standardized) or applications can have more robust settings. Of the two, the easiest to work on right now is the latter.</p>


<?php
require 'templates/blog-footer.php';
?>