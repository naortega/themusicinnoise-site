<?php
require 'config.php';
require '2017-01-07-getting-esperanto-diacritics-on-gnu-linux.cfg.php';
require 'templates/blog-header.php';
?>
<p>Recently I've decided to start learning Esperanto alongside Japanese. I have my reasons for liking Esperanto, but this post is mostly on how to get the Esperanto diacritics (namely ĉ, ŝ, ĥ, ĵ, ǔ, and ĝ) on your keyboard for GNU/Linux. There are multiple ways of doing this, the ibus system has some Esperanto IMEs (like the x-system and h-system), but I've found those to be extremely annoying while typing (just try to use them, if you're used to typing using a Japanese IME for hiragana and katakana then this will annoy you). So instead I decided to use a method I used to use back in the day for getting Spanish tildes, dieresis, and the 'ñ' characters: Xmodmap. Basically I mapped a key I barely used (like the right `alt' and `shift' keys) to tilde and 'ñ'.</p>

<p>In this specific case I used `xev' to find out the `keycode' for my right `alt' key and then made a file in my home directory called `.Xmodmap' containing the line `keycode 108 = dead_circumflex' (make sure to change `108' with whatever your `xev' gives you for your dead key). After this just run `xmodmap ~/.Xmodmap' and it you will be able to use the circumflex by typing the right `alt' (or whatever you set it to) and then the character, such that `ralt+s' would give 'ŝ'. <b>NOTE:</b> you do not need to hold down the `alt' key, just press it once ;D.</p>

<p>It took me forever to get this figured out, so I'm hoping that this helps some other poor soul who does not want to look through the thousands of links saying "look at the KDE/GNOME docs".</p>

<p><b>UPDATE 19/03/2020:</b> I've taken to using the US International keyboard layout instead of this hack, as it's much more effective and not as buggy. This just means changing your keyboard layout to US International via a tool like IBUS, whatever your DE uses - which is probably IBUS - or put it in your WM's init script as <code>`setxkbmap us altgr-intl'</code>.</p>


<?php
require 'templates/blog-footer.php';
?>