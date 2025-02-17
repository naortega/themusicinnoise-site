<?php
require 'config.php';
require '2019-12-11-moving-away-from-cmake.cfg.php';
require 'templates/blog-header.php';
?>
<p>I've used CMake for quite some time, and I must admit that it's a very comprehensible build system. This is, in fact, what originally made it an attractive option to me, since UNIX Makefiles are somewhat cryptic to read and write. However, as of lately,  I've been moving away from CMake, especially for smaller projects that don't have many source files or complex dependencies. There are a few reasons for this.</p>

<p>To start off, CMake is bloated. I've always known it was bloated, and I know it's not as bloated as other build systems (I'm looking at you GNU Autotools), but I've always just put up with its bloated nature for the convenience of having a readable build script (the <code>CMakeLists.txt</code> file). However, once you get to learn the syntax of UNIX Makefiles, they're much faster and a lot less tedious, which is often what I'm looking for in my smaller projects.</p>

<p>It's also somewhat dumb to use a program that all it will do is generate an enormous and inefficient <code>Makefile</code> that you could write yourself. This makes sense if we're talking about a build system that needs to accomplish very complicated tasks, with a complex build tree and dependencies, but for most projects this simply is a waste of time, computing power, and disk space. It's much easier to just write a small <code>Makefile</code>.</p>

<p>Something annoying about CMake is that it's hard to run other programs from CMake. UNIX Makefiles function practically like a shell script, and therefore you can run these commands by just writing them into a target's instructions. With CMake you have to add a custom command to its repertoire and run it from there. This can be extremely annoying depending on how many custom commands you need to run, while with UNIX Makefiles you simply run them like you would in a shell script. This also makes UNIX Makefiles way more versatile, since they can do a variety of tasks simply as part of its built-in functionality without adding custom bits.</p>

<p>There are some areas where I can see CMake being useful, particularly when we want to test dependencies. Hand-writing this into a <code>Makefile</code> would be time consuming and annoying, even if we had the help of <code>pkg-config</code>, while in CMake it's done almost automatically. So I can understand and will use CMake for large projects. But for anything that's small enough or simple enough, I'd rather just use a UNIX Makefile.</p>


<?php
require 'templates/blog-footer.php';
?>