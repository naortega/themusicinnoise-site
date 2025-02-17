<?php
require 'config.php';
require '2017-12-20-my-recent-dislike-for-oop-languages.cfg.php';
require 'templates/blog-header.php';
?>
<p>Recently I have found myself disliking OOPLs , and I'd like to explain my reasoning for this. I'd also like to note that this may not necessarily apply to all OOPLs or uses of them, but it does apply to those which I am familiar with (primarily C++ and Java).</p>

<p>At my university the teachers use a lot of C++, in the Fundamentals of Programming class (teaching the absolute basics, like variables, loops, conditionals, data types, structures, etc.) they used C++ even though the features they were using were just as easily available on C. Then in the OOP class I had the next term they continued to use C++, this year it's used for my Data Structures class and next term I'll be using Java for the Artificial Intelligence course. OOPLs seem to be extremely popular, at least at my university. However, because of this and having to work with them a lot in a stricter project environment (versus my experience with solo projects or small cooperative projects), and with it I've come to see some reasons for disliking them.</p>

<p>First of all, it adds an extra layer of abstraction away from assembly and therefore the machine. Even though I fully acknowledge that C++ is just as capable of being low-level as C, it's also true that the way C++ is used (if it is to be used correctly) abstracts the developer further away from the end product (the binary) and therefore in an educational environment what tends to happen is most students see their code and simply think it is some kind of magic (despite us having learned assembly in previous courses). This often leads them to get confused as to how the program is actually functioning, creating a maze of code in which it can be extremely difficult to find a bug, or even integrate it with other code without massive amounts of code restructuring.</p>

<p>Another issue I find (which is probably rehashed from Linus Torvald's critique of C++ that I read a long time ago) is that software written in OOPLs are often very fragile, depending very much on a specific design and methodology for coding, whilst other paradigms (such as procedural or functional) are simple enough that they somewhat guide the developer into a certain common methodology and coding style (after all, what other method is there to organize functions). Because of this OOPLs require a lot more planning, making sure that every developer in the team follows the model proposed.</p>

<p>Finally, OOPLs tend to create what I call <i>bureaucracy</i>: class <code>A</code> only has access to class <code>B</code> and asks it for variable <code>i</code> via a method, but class <code>B</code> doesn't actually have this variable, it needs to ask for it from class <code>C</code> who actually has the variable in question. These kinds of situations happen constantly in object oriented projects once they get large enough due to variable and function ownership. This bureaucracy, unless solved with inline functions, will inevitably create bloat in the code unless the compiler can manage to optimize it. This will also add many more lines of code to an otherwise simple issue of retrieving a variable.</p>

<p>As I mentioned before, there may be exceptions to this with certain languages, my experience is mostly with Java and C++, but I believe this is a paradigm issue. This doesn't mean that OOPLs aren't useful, but I dislike them compared to a much simpler C.</p>


<?php
require 'templates/blog-footer.php';
?>