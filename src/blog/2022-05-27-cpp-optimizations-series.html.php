<?php
require 'config.php';
require '2022-05-27-cpp-optimizations-series.cfg.php';
require 'templates/blog-header.php';
?>
<p>I've recently started working on a new series on my Odysee channel which aims
to explain some very basic C/C++ code optimizations at an assembly
level.<sup><a href="#r1" >[1]</a></sup> I explore different keywords and good
programming habits in C++ and explain why they can lead to more optimized code
using the resulting assembly code. Basically, I compile the C++ code and then I
disassemble it using a tool like <code>objdump</code>.</p>

<p>My main reason for making this series is that I find that many programmers
don't actually know what they're doing when they program. They write code simply
trying to get it done, but they're never disciplined in good programming habits
in their language. This is a shame considering that many of these simple habits
can greatly improve the efficiency of the output.</p>

<p>As for why I'm using the dreaded video format instead of text the reason is
quite simple: I'm lazy. Writing all that up takes a lot of time and effort, and
this isn't exactly a programming tutorial, but rather an explanation/exposition.
So I don't mind the format all that much.</p>

<p>I hope this is useful.</p>

<h2>References</h2>

<ol class="refs" >
	<li id="r1" >
		<a href="https://odysee.com/@nortega:7/C%2B%2B-Optimizations-Series:b?r=Cgf2A9Q55WHkdCBZhVdYdHg6bGCkmai8" >
			"C++ Optimizations Series" on Odysee
		</a>
	</li>
</ol>

<?php
require 'templates/blog-footer.php';
?>