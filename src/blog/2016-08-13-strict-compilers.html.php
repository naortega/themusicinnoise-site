<?php
require 'config.php';
require '2016-08-13-strict-compilers.cfg.php';
require 'templates/blog-header.php';
?>
<p>For almost a year now I've been working on the <a href="https://notabug.org/bkeys/DMUX" target="_blank" >DMUX</a> project along with some other people. The leader of the project, <a href="http://www.bkeys.org" target="_blank" >Brigham Keys</a>, since the beginning has put in place a strict compiler in order to assure the highest code quality for us to work on avoiding bugs since step one. This means the compiler bitches about <b>everything</b>. Any small issue that there might be this compiler will whine to you. However, I have come to see this as a superior way of writing code, by doing this we are avoiding having to deal with many bugs (along with avoiding heap allocation whenever possible it avoid us having any major problems) and I would greatly encourage people to use strict compilers in order to avoid these things, much more if you're working in a group and especially if you're teaching people how to program.</p>

<p>Looking back, a strict compiler would fix a lot of things that have frustrated me in the past. For example, when I was in high school I was a teacher's assistant for the technology teacher and he had me and my friend correct exams of the programming students. What I found painful was when students would create variables <b>and never use them!!!</b> Basically, the definition of inefficiency, you're taking up resources, holding memory, that you don't need to have. I understand if maybe you don't understand how to use inline functions, or how to optimize your code in general, even I have issues with that, but creating a variable and never using it is an obvious case where there should be a compiler error, you're taking up memory without using it. So this frustrated me a lot back then, but if these kids were using a strict compiler from the start (they were learning Java, but even Java can be strict if you pass the right flags) then it would help them to break these habits.</p>

<p>I will admit that it's a pain, especially when I'm developing for Ubuntu and something goes wrong, mostly because the code works on my computer (Debian Testing), Brigham's computer (Fedora), and our other comrade's computer (Arch), yet it fails on Ubuntu. I don't know what Ubuntu is doing, but they need to cut this crap out. If it weren't for the fact that between normies they're the most used distribution we would simply just stop supporting it (because I don't want to have to deal with their nonsense), but unfortunately the better quality doesn't always win majority support even for the same price (which, in this case, is free as in gratis).</p>

<p>So, in conclusion, please start using strict compilers, that way we can also weed out the normies that program for money rather than for fun (someone with genuine interest would be willing to program despite any complaints by the compiler).</p>


<?php
require 'templates/blog-footer.php';
?>