<?php
require 'config.php';
require '2021-01-21-five-technological-principles-to-live-by.cfg.php';
require 'templates/blog-header.php';
?>
<p>A problem that presents itself with our use of modern technologies
and how we develop them is how extremely inefficient it ends up being.
Often times the technological solutions we choose to solve a given
problem are overly complex and rigid, requiring us to be wasteful. As a
result of this demand for poorly designed technologies, suppliers
provide exactly what we ask for, and as such engineers develop
technologies that promote this inefficient use.</p>

<p>Basing these primarily on the UNIX
philosophy<sup><a href="#r1" >[1]</a></sup>, I've come up with a five
principles by which I decide which technological solutions to elect, as
well as how my own software should be designed. It's worth noting that
these are not only applicable to software or even digital technological
solutions, but rather can be applied to any use of technology.</p>

<p><i>Necessity</i>. We must understand this principle not in its
strictest form (i.e. what is absolutely necessary to survive), but
rather in the true sense of what an ordered use of technology is: a
means to achieve an end. We call them "solutions" because they solve a
problem. As such, technology should not be an end within itself, and if
we are to use a technology, it should be to achieve a set goal. If there
is no goal then we should likely not use the technology.</p>

<p>As a note on this matter, we must distinguish technology as a tool
(which is the object of this article) and technology used in art (e.g. a
video game), as in this case the art is the end to which the technology
is ordered.</p>

<p><i>Simplicity</i>. After we determine that a technological solution
is required, and as such have also determined what features we require
of said technology to provide a viable solution, we must always choose
the simplest option available to use. This is to say, a solution that
does only that which we require of it and nothing more. In the (common)
event that this is not possible, we must choose that solution which has
the least amount of excess features. The reason being that the more
complex a system is the higher chances there are of that system having
a structural flaw, and due to the complexity of the technology, solving
it becomes its very own struggle. As such, by having a system that is no
more complex than absolutely necessary, one avoids a larger number of
technological problems. To give an example, one is much more likely to
encounter problems writing with a typewriter than with a pen or
pencil.</p>

<p>This principle, however, should never trump the principle of
necessity. That is to say, we should not neglect a necessity in the name
of simplicity. If a necessity requires that a more complex solution be
used, then this overrides the principle of simplicity.</p>

<p><i>Modularity</i>. In aid of maintaining the principle of simplicity,
a technological solution should also be modular, and therefore
facilitating the addition and removal of modules/components that can add
new features. This permits the base technology to only provide the most
basic and fundamental of functionalities, while also being extensible
such that new features that may be required by the user can easily be
added or removed when need be. Here one could think of the example of a
hunter's rifle, upon which a scope may be mounted.</p>

<p><i>Interoperability</i>. A technological solution must be able to
easily operate with other technologies, thereby permitting that each one
may specialize in a specific task, and the output of one may serve as
input for the next. This principle reinforces the principle of
simplicity by allowing for each individual technology to specialize in
its own task, rather than requiring that a single technology solve the
entire problem. This can be thought of in the sense of an assembly line,
where at each station a different task is performed. Each task is
independent of the one before it, yet they all contribute towards the
same ultimate goal.</p>

<p><i>Universality</i>. The technology must be able to input and output
in a standard and universal format that is not specific to that
technology, therefore facilitating its replacement with a better
solution. This principle serves to enable the previous principle of
interoperability, as it is what allows for one technology to input the
output of another, making proper use of it. It also makes the system of
independent interoperable technologies more flexible, allowing one to
remove one component and replace it with another that may have more
aptitude solving a particular problem. An example of this would be
language itself, as we use a common language in order to communicate
ideas in a standard manner such that it may be commonly understood.</p>

<p>Now, although these principles are great in theory, in practice we
find that often times solutions meeting all these principles are simply
not available. This is especially true in the area of computer programs,
where often times companies will neglect these principles (regardless of
how useful they are) for business reasons. However, they may still serve
as a general guideline when we discern what technological solutions to
choose to solve different problems we are confronted with, and those
technologies that are compliant with more principles should be favored
over those that are compliant with less.</p>

<label id="r1" >[1]</label>
<a
	   href="https://en.wikipedia.org/wiki/Unix_philosophy"
	   target="_blank" >
	https://en.wikipedia.org/wiki/Unix_philosophy
</a>

<?php
require 'templates/blog-footer.php';
?>