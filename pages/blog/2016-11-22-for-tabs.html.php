<?php
require 'config.php';
require '2016-11-22-for-tabs.cfg.php';
require 'templates/blog-header.php';
?>
<p>It's time for me to get involved in one of the most polar debates among programmers, even more polar and controversial than Vim vs. Emacs, which is tabs vs. spaces. In the Vim vs. Emacs debate many programmers tend to get left out and don't care because they('re noobs and) use GUI editors. While in the tabs vs. spaces debate, unless you only program in Assembly (and even then) or some obscure language that doesn't use indentation (or you just don't use indentation), you have used either one for your indentation and can most likely know what the conversation is about.</p>

<p>To start off I am in favor of tabs. I'm not too religious about it, but if we're going to use spaces then it's gotta be 4. I actually don't have too many problems with using spaces, especially since my Vim has a plugin to detect indentation. However, if I am to choose how indentation is done then I choose tabs over spaces any day. My reasoning for this is simple: if tab characters are used then everyone gets to see the indentation they prefer. Remember how I said that if I use spaces it has to be 4? Yeah, that's because my tab size is set to 4. If tabs are used then I get to see a 4 column indentation, someone else gets to see a 2 column indentation, and someone else can see an 8 column indentation. Typically this is seen as a disadvantage of tabs, however I see it as advantageous since every programmer gets to see their code in the way they want it. Some may complain that they have to get used to pressing the tab key instead of the space bar, but to them I say that they should've setup their editor to convert tabs to spaces from the beginning instead of having to hit the space bar 4 times just to indent a line of code.</p>

<p>One disadvantage that must be acknowledged is that this makes the `columns' number on your editor almost useless (since it counts tabs as only one column). However, I do not see this as important since all you really need is the line number and the compiler will tell you at what point on that line (in terms of the code on that line) the error/warning is coming from. No need for columns.</p>

<p>Basically, tabs allow each programmer to see things how they want to and be more efficient (since they'll be able to see all projects with the same indentation so long as they use tabs or the same number of spaces as there are columns in their tabs). Therefore, by using tabs everyone gets to see the code the way they want to and no one has to pass code back and forth between a styler. So let's stop the indentation size dictatorship of spaces that stops the hacker from seeing the code the way they want and work towards a tabs future so every hacker can read the code how they want to!</p>


<?php
require 'templates/blog-footer.php';
?>