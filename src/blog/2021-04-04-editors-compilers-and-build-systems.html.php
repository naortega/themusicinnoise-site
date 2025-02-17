<?php
require 'config.php';
require '2021-04-04-editors-compilers-and-build-systems.cfg.php';
require 'templates/blog-header.php';
?>
<p>Firstly, a very blessed Easter Sunday to all! I would've liked to
write an Easter Sunday post, but I do not have a topic planned. Alas,
it'll have to wait for another year.</p>

<p>Now let's get into the topic of this post: Editors, compilers, and
build systems. It somewhat bothers me that many university students are
unaware of this distinction. They have a vague idea, but are unable to
pin it down. This is primarily because professors make a point of using
IDEs from the start. As such, some have come to believe that you require
a special program (e.g. Eclipse for Java) in order to write code for a
given language. This limits them severely in their software development,
since they restrict themselves to the tools which the IDE provides them
with. Instead, especially in a university where it's supposed that one
learns the foundational knowledge and concepts of a given field, it
would make more sense to teach students these concepts as separate tools
first, before <em>allowing them</em> to use these all-in-one IDE
solutions.</p>

<p>I suppose that most of my readers will either know the difference
already, or are not very tech-savvy and probably have no idea what I'm
talking about. But I am going to go over the difference between these
anyways.</p>

<p>An <em>editor</em> is a tool that is used to edit a plain text file.
That is, any editor can read &amp; write any file written by any other
editor because it's nothing but ASCII text. These editors can be simple,
(e.g. nano) or they can be more complex (e.g. VIM, VSCode), containing
all kinds of features which make editing code easier (e.g. syntax
highlighting, linters, autocompletion).</p>

<p>A <em>compiler</em> is a tool used to turn code written with the
editor into a binary that can be read by the machine (or by a virtual
machine, as in the case of Java). One need not use any particular
compiler for any particular editor. The compiler one wishes to use
depends on the programming language, and the target platform.</p>

<p>A <em>build system</em> is a tool which can be understood like a kind
of <i>script</i> which helps to figure out what compiler commands to
run, and makes compiling an entire project much easier. That is, instead
of writing every single compiler command for every source file manually,
one can simple run the build system and it will run these automatically.
There exist some build systems which are language-dependent (e.g.
Maven), but there are many others which are mostly language-agnostic
(e.g. Makefile, CMake, Ninja).</p>

<p>Despite this, I do not wish to make out IDEs to be an inherently bad
thing. For although I personally have been using (Neo)Vim for about 5
years now, and am very content with it, I recognize that for many an
integrated development environment (IDE) may be the more productive tool
for their particular use. But I believe that being able to discriminate
between these different components, which in an IDE are integrated into
one single tool, is vital for proper project management and
collaboration with others who may not want to use the same tools.</p>

<?php
require 'templates/blog-footer.php';
?>