<?php
require 'config.php';
require '2022-05-27-critique-of-functional-programming.cfg.php';
require 'templates/blog-header.php';
?>
<p>I've been using Rust for a while now, particularly on my pet project,
Indivisible,<sup><a href="#r1" >[1]</a></sup> and one very key feature of Rust
is that it's designed to be used primarily with the functional programming
paradigm<sup><a href="#r2" >[2]</a></sup> (as opposed to the imperative
paradigm<sup><a href="#r3" >[3]</a></sup>). I noticed this especially when I
wanted to use a given library for parallelization in Rust, which was only
available using this functional paradigm, therefore forcing me to adopt it. I've
had a little exposure to this paradigm before, but I haven't had to use it
extensively. After this I thought I would write about my experience on the
matter.</p>

<p>I will admit I went into this quite critically. I've had bad experiences with
this paradigm in the past, and I'm not fond of change. I'm a very classical
person who is very used to C/C++ programming, and quite fond of assembly. Even
so, I was willing to give Rust and functional programming a try. So I'm simply
going to list off the pros and cons I've found with this paradigm.</p>

<h2>Pros</h2>

<h3>(Generally) More Optimal Code</h3>

<p>One of the benefits of using something like a library - which is basically
what you do when you follow a functional paradigm - is that someone else way
smarter than you has written the complicated bits, and probably in a more
optimal manner. Instead of you typing down the first algorithm that comes to
your head, someone has (hopefully) studied the different algorithms and their
time complexity and chosen those which are most optimal for solving each
different issue.</p>

<p>Now, although this can also apply to the imperative paradigm whenever one
uses a library for any given task, it's true that the imperative paradigm is not
characterized by passing the result of one function to another within the
library, so there's less of a robust variety of functions to solve different
(and often common) problems.</p>

<p>This being said, I have put down the caveat "generally", as this isn't always
the case, mostly because you (the unintelligent developer) still have some part
in the programming process, and if you don't know how to use these functions
properly, you may even make something that's even less efficient than if you
were to program it all manually.</p>

<h3>Less Code</h3>

<p>Less code doesn't necessarily mean better code, but it's still nice. Reason
being that it typically makes it faster to read through, and faster to develop.
Instead of having to manually type down all these different loops and filters,
you simply call these preprogrammed functions. Take the two examples of Rust
code that follow as an example:</p>

<figure>
	<code>
		// functional<br />
		let prime = !(start..end).step_by(2).any(|x| n % x == 0);<br />
		// imperative<br />
		let mut prime = true;<br />
		for i in (start..end).step_by(2)<br />
		{<br />
		&nbsp;&nbsp;&nbsp;&nbsp;if n % i == 0<br />
		&nbsp;&nbsp;&nbsp;&nbsp;{<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prime = false;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;}<br />
		}<br />
	</code>
	<br />
	<figcaption>
		Code block 1. Functional versus imperative code comparison.
	</figcaption>
</figure>

<h2>Cons</h2>

<h3>Cryptic Code</h3>

<p>Perhaps my most pressing complaint about the functional paradigm is that it's
extremely cryptic to read. You can often end up with these very long chains of
functions with strange names doing very abstract tasks, all the while with a web
browser open next to it with the documentation to make sure you're understanding
what's going on correctly. You get these very strange syntactical structures
that you're not quite sure how they're working, but you go along with it
anyways.</p>

<p>The consequence of this is that, even though there may be less code to read,
it's actually harder to understand what the code does exactly. Even when writing
the code I've often found myself having to look over it several times to make
sure it was going to do what I wanted it to.</p>

<h3>Extensive Familiarity Required</h3>

<p>When we work with any kind of library you generally have to familiarize
yourself with it, and in using the functional paradigm this isn't any different.
However, because functional programming <em>depends on</em> a library for its
proper usage, you must familiarize yourself with all these very specific
functions to make sure you're using the most optimal function for the task. If
not, you can actually end up making very inefficient code.</p>

<h2>Conclusion</h2>

<p>Ultimately it's a question of what you're used to and what you care about. I
fully understand that in most enterprise settings, where the objective is simply
to get a product out to market as soon as possible, that many companies would
prefer a functional paradigm language to get this done faster, and even get new
employees up-to-speed as quickly as possible. But I'm not as convinced that it
creates good code, as much as it creates lazy and inexperienced programmers. It
also distances the developers more from the actual functionality of their code
as well as the algorithms behind it.</p>

<p>Use whatever you're comfortable with, but I still prefer good ol' imperative
programming.</p>

<h2>References</h2>

<ol class="refs">
	<li id="r1" >
		<a href="https://gitlab.com/naortega/indivisible" >
			Indivisible project on GitLab
		</a>
	</li>
	<li id="r2" >
		<a href="https://en.wikipedia.org/wiki/Functional_programming" >
			"Functional programming" on Wikipedia
		</a>
	</li>
	<li id="r3" >
		<a href="https://en.wikipedia.org/wiki/Imperative_programming" >
			"Imperative programming" on Wikipedia
		</a>
	</li>
</ol>

<?php
require 'templates/blog-footer.php';
?>