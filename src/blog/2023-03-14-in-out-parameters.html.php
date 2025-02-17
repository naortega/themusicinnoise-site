<?php
require 'config.php';
require '2023-03-14-in-out-parameters.cfg.php';
require 'templates/blog-header.php';
?>
<p>
So at work I have to deal with a codebase that works with C and C++. In the part
of the code that is C++ specifically I'll often find lots of reference
parameters in functions. This is something great and good for objects, since
passing lots of information by copy is extremely inefficient, but there is one
thing that is extremely bothersome: not knowing which parameters are
in-parameters and which are out-parameters.
</p>

<p>
In case you're not familiar with this concept of in- and out-parameters, this is
something very common in the world of C and C++, but more from C. If you've ever
done any programming (or mathematics) you probably already know what an
in-parameter is: it's the parameter that serves as input for the function to do
what it needs to do. But there are cases where you may want a parameter not to
input something, but to output something. The idea is if you need to return an
object from your function, but you also want to return an integer code if
there's an error - or whatever other example you can think of, this just came to
my mind. In such a case you may have something like this:
</p>

<blockquote>
	<code>
		int init_obj(struct object *obj) { /* init object */ }<br />
		...<br />
		struct object obj;<br />
		int res = init_obj(&amp;obj);<br />
		if (res &lt; 0) { /* handle error */ }
	</code>
</blockquote>

<p>
In this example, we want to initialize our structure object statically, so we
pass a pointer to it (<code>&amp;obj</code>) so it can be modified. Therefore we
cannot simply return the object, or if we did it might be costly since the
compiler might try to make a copy - leave arguments about compiler optimization
for another time. But also we want to know if this operation failed, and to have
an error code in the case that it does (in this case the code being less than
zero). Therefore, in this example, the <code>obj</code> parameter of the
<code>init_obj</code> function is an out-parameter.
</p>

<p>
These are extremely useful in C and even C++. What's more, in C++ they have
these wonderful things called <em>reference parameters</em>, which are great
because you don't have to deal with the pesky pointer syntax, and you basically
treat them like any other variable - the obvious downside being you may forget
you're actually dealing with memory that isn't yours. I use them a lot at work,
as will any good C/C++ programmer. But there's one problem: when pointers &amp;
references are used, but nowhere is it clarified whether they are in- or
out-parameters.
</p>

<p>
Imagine you're reading through some code and you come across a function with a
few different references in its parameters - or pointers, same thing. You look
at the parameter names, but they seem completely undescriptive. You check to see
if maybe you can discern something from the function name or the type definition
of the parameters... No, there's nothing. You think: "Okay, maybe I can just
read the function and figure this out." Only then you realize the function is
some 1000+ lines long. You check to see if someone wrote a comment at the head
of the function or its declaration, but no cigar, because if there's one thing
programmers hate it's documenting their code (or someone else's for that
matter).
</p>

<p>
There are technically three solutions to this problem... Well, three solutions
<em>you</em> can implement in good practice to avoid someone (like yourself)
falling into this problem. And they aren't mutually exclusive, you could do all
three.
</p>

<p>
The first is the most obvious: document your code! Yes, I know, it's hard. I
probably don't do it as often as I should either. (Who does?) But it's really
the easiest thing to do. Just write a small header to the function saying what
the function does, what each parameter is for, and what are the possible return
values. Should only take you less than a minute.
</p>

<p>
The second is perhaps easier than the first, and if you're into the philosophy
of "The Code Should Document Itself" then this is probably your way to go:
prepend the keywords <code>in_</code> and <code>out_</code> to each reference
parameter. It's simple, it's descriptive, and the next developer (or you in a
week) knows what they're doing with the function.
</p>

<p>
The third and final solution, which is truly my personal favorite because it
also gives optimization benefits: make all in-parameters constant. Seriously,
it's C/C++ efficiency 101 that when you have a parameter that is a
pointer/reference that you won't be modifying you make it <code>const</code>.
You may think this is less effective than the previous two strategies - and at
least compared to the first it is -, but considering how modern editors/IDEs
work, they generally show you the kind of parameter which is required as you're
filling in the function call, and even if you mess up, the linter will notice
you're trying to modify a constant parameter and it will yell at you.
</p>

<p>
Well, there you go. No more excuses. Now you can continue to write good C/C++
code like a boss, but without creating headaches for some poor future developer.
</p>

<?php
require 'templates/blog-footer.php';
?>