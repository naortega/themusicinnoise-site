<?php
require 'config.php';
require '2016-06-05-resources-for-learning-x86_64-assembly.cfg.php';
require 'templates/blog-header.php';
?>
<p>I guess this will be a post of mine that will actually be useful for
something...</p>

<p>So lately, if you've seen <a href="https://github.com/naortega/" target="_blank" >my Github</a> you
can see that I've been learning some x86 assembly, specifically x86-64 (you
know, because I run a 64-bit version of the Linux kernel). But I found that
there aren't many people interested in x86-64 (which isn't saying much
considering I'm talking about Assembly, much less x86-64 Assembly), but I
was able to find some information, get some help, and a nice digital book
that teaches you x86 Assembly (<b>not</b> x86-64, please keep that in mind).</p>

<p>The first of the resources is the book, which a friend of mine,
<a href="https://github.com/ComradeKeys/" target="_blank" >@ComradeKeys</a> suggested to me, called
<a href="http://mirrors.fe.up.pt/pub/nongnu//pgubook/ProgrammingGroundUp-1-0-booksize.pdf" target="_blank" >Programming from the Ground Up</a>
by Jonathan Bartlett. This book will teach you a lot of the basics of the
Assembly language and how to work with it, but it's only written for x86
32-bit. However, that doesn't mean that it's hard to port to x86-64, in
fact if you look at <a href="https://github.com/naortega/" target="_blank" >my Github</a> you'll see
that I've been porting some of the examples to x86-64 using the new
registers and word sizes (I've worked on getting some of the new x86-64 ABI
in there but that's taking its time since I'm still new to Assembly in
general). So you should be able to use that link for help.</p>

<p>Of course, something else that I noticed had changed were system calls. The
first thing I should point out is that instead of doing the `int $0x80' you
instead use the `syscall' command to call the Linux kernel. But you'll also
notice thhat the registers to use aren't the same and that the call numbers
aren't the same (yeah, 1 is no longer exit, but write), so I had to look
this up and found <a href="http://blog.rchapman.org/post/36801038863/linux-system-call-table-for-x86-64" target="_blank" >this link</a>
which gives a very nice and complete list of system calls, most of which
you will most likely never use. This link also answers the question of
which registers to use as parameters for the system calls, just look at the
top of the table provided (%rax, %rdi, %rsi, etc.). With this you should
have a pretty good idea of what's going on.</p>

<p>However, one problem that I came up with was when I tried using the stack,
which is why I would like to point something out that is very important,
<b>remember</b> that x86-64 uses quads which are 8 bytes instead of 4 like
longs are (this means instead of using `movl' you use `movq'). I say this
because I had this issue when porting one of the examples from the digital
book mentioned earlier and I had to ask a question on StackOverflow about
it that can be found <a href="https://stackoverflow.com/questions/37635864" target="_blank" >here</a>.</p>

<p>Of course, then there's the ABI, which you can pay attention to or not if
it's just a small project, but it's a good idea to learn it. For this I
have a couple links, one is the actual <a href="http://www.x86-64.org/documentation/abi.pdf" target="_blank" >x86-64 ABI</a>
from the x86-64 website (yeah, I know right, these people have a website?)
and another <b>much</b> smaller version which is a University of Chicago
<a href="https://www.classes.cs.uchicago.edu/archive/2009/spring/22620-1/docs/handout-03.pdf" target="_blank" >x86-64 Instructions and ABI</a>
handout. Both are nice resources, just that one is <b>a lot</b> shorter than
the other.</p>

<p>With this you have some nice resources to start out with, and I'm pretty
sure there are more, but this is what I have to offer you. I hope this
post is helpful.</p>


<?php
require 'templates/blog-footer.php';
?>