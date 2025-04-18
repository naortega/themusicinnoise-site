<?php
require 'config.php';
require '2016-11-15-studying-for-my-c++-exam.cfg.php';
require 'templates/blog-header.php';
?>
<p>Today (in an hour and a half of me writing this) I have a practice exam on C++ programming. However, while all other students are studying loops, conditionals, array,s, and structures, I (obviously) am not. Instead I found a magnificent website containing a bunch of <a href="http://madebyevan.com/obscure-cpp-features/" target="_blank" >obscure C++ features</a> that I plan on using in the exam (at least those I can use for a class that hasn't even studied functions yet, much less pointers). One of the ones I'm most fond of (and that I did not think about before reading this page) is how an array is simply a pointer to a direction in memory (on the stack or the heap) where variables are stored. This is obvious once you think about it, but it has implications. This means that the array variable is holding the memory address to these variables, so this can no be used to create obscure syntax. Especially since the square brackets actually just do a sum to calculate the address and then point to that address, that is, <code>`myArray[3]'</code> is the same as <code>`3[myArray]'</code>. And what's more, remember how arrays are just pointing to different locations in memory (kind of like all variables, really)? Well, this means that you can just as easily do <code>`*(myArray + 3)'</code> and it will do the same exact thing. If anything this last one is more explanatory of what is actually going on, seeing that it's pointing to a memory address where the variable is located and it is put in a much more explicit manner.</p>

<p>So yeah, I plan on using this for my exam. Why? So the teacher can see that this is child's play for me and that I should not be wasting my time on this when I could be creating something more important (like working on my hundreds of projects on GitHub and GitLab).</p>


<?php
require 'templates/blog-footer.php';
?>