<?php
require 'config.php';
require '2019-06-16-pybitmessage-sucks.cfg.php';
require 'templates/blog-header.php';
?>
<p>Recently I've removed my Bitmessage address from the contact page of my website, and there's a reason for this. I'd like to start by saying that my complaints here are directed at PyBitmessage (the official Bitmessage client), not Bitmessage itself as a technology.</p>

<p>If you run any Linux distro that isn't using running software from 5 years ago (*cough* Debian Stable *cough*) and you use PyBitmessage you should already know what I'm going to be ranting about (or if not, you'll learn why your PyBitmessage has had problems working recently). The issue at heart is that <a href="https://github.com/Bitmessage/PyBitmessage/issues/897#start-of-content" target="_blank" >PyBitmessage refuses to update their dependencies</a>. The client uses Python 2 and Qt4. The issue with this is that the support for both these technologies is being dropped or has already been dropped (<a href="https://github.com/python/peps/blob/master/pep-0373.txt" target="_blank" >Python 2.7</a>, Qt4 is mentioned in the article). This means there will be no bug fixes, and (more importantly) <b>no security updates</b>! The stated reason by a PyBitmessage developer is that "Windows XP is still a supported platform for PyBitmessage. However Windows XP (and Vista) is missing from Qt5's Supported Platforms ...".</p>

<p>This attitude demonstrates that they are more concerned with platform support for an OS that is old, unsupported by its developer, and part of the PRISM program, than with keeping the software itself up-to-date and as secure as possible. This kind of behaviour is not one that should be expected from developers of a program meant to be secure and private.</p>

<p>Therefore, until PyBitmessage updates to Qt5 and Python 3, or a new client appears (hopefully one with a CLI), I will not be able to read anything from Bitmessage.</p>


<?php
require 'templates/blog-footer.php';
?>