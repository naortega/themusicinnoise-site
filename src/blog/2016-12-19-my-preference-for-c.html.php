<?php
require 'config.php';
require '2016-12-19-my-preference-for-c.cfg.php';
require 'templates/blog-header.php';
?>
<p>Of all the programming languages my favorite in general is C. I'm fine with using other languages, but C is by far my favorite. The reason for this is that C is much closer to assembly than other languages which try to abstract it away from the developer. When programming in C you can see how the code would look in assembly just by looking at it, and it makes it easier to do performance improvements since you know what the code will look like more-or-less in assembly (with `-O0', of course). This makes it much easier for me to visualize how the computer is going to be managing the system's resources with my code and how it's going to run it, giving me much more control (something that I typically am attracted to in a programming language or in computing in general). Then there's also how the code in C is still low-level and is compiled to a binary, being much more efficient than an interpreted language. It is also quite basic, having a fewer variety of syntax which helps to make finding 'the best solution' much easier (unlike in C++ where there are 200 different ways to implement the same thing).</p>

<p>Of course, I do recognize that C is not best for every job, for example, for most desktop games I would prefer to use C++, since OOP languages seem to be better suited for games (or rather that gamedev itself fits the OOP paradigm very well), for any mobile app I'd obviously use Java, and so on. However, in general for a program I prefer C, seeing that it gives me more control over the computer, does not abstract me too far away from the assembly that is beneath, and does not bombard me with syntax and strange features.</p>


<?php
require 'templates/blog-footer.php';
?>