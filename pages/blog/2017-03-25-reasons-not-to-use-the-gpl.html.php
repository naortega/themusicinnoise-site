<?php
require 'config.php';
require '2017-03-25-reasons-not-to-use-the-gpl.cfg.php';
require 'templates/blog-header.php';
?>
<p><b>NOTE:</b> I am explicitly referring to the GNU General Public License version 2 and 3 when I say GPL, it is not referring to other licenses such as the Lesser General Public License or the Affero General Public License.</p>

<p>If you are actively involved in the Free Software movement you are probably well aware of how the web is a treacherous place where non-free programs are constantly installed on your computer without permission by default. The most obvious of these is the <a href="https://www.gnu.org/philosophy/javascript-trap.html" target="_blank" >JavaScript trap</a>, however similar issues arise with, for example, plugins such as Java web applets. However, measures can be taken against these and are actively improving, such as <a href="https://www.gnu.org/software/librejs/" target="_blank" >LibreJS</a>, which stops non-free non-trivial JavaScript files from running, one can also disable JavaScript and plugins on their browser to avoid downloading the malicious content.</p>

<p>However, this is only on the user-side on how to protect ourselves, but this also has consequences on the developer-side as well, more specifically if you are going to license any of your programs under GPL. This is something that concerns you even if you are not making a web application, and it concerns everyone who wants to put a GPL license on their next project.</p>

<p>To start, let me explain the difference between the GPL and AGPL licenses: AGPL was born because in the era of these web applications a flaw in the GPL was perceived where one could modify the source code of another person's back-end and run that modified copy in a production environment, yet because they are not distributing binaries per se they are not legally obliged to provide the sources. This is the case with web apps such as Wordpress. This change was not integrated into a GPLv4 or similar because some people (such as Wordpress) are fine with others hosting modified copies of their program and not providing sources. This is their choice. And this difference is quite obvious when we are looking at web applications, it is quite simple to understand the consequences and how you are affected as a developer. However, what happens when this does not apply to a web app? What's more, what happens when this applies to your client?</p>

<p>We are reaching the technological capability by which almost everything can be put on a web service (<a href="https://en.wikipedia.org/wiki/Software_as_a_service" target="_blank" >SaaSS</a>, or more commonly referred to as 'The Cloud'), mostly through the means of web apps such as webmail, remote file storage, and even document editing. These remote services have <a href="https://www.gnu.org/philosophy/who-does-that-server-really-serve.html" target="_blank" >ethical issues of their own</a> (independently of whether or not the source code be available under a Free Software license). However, at the same time we are starting to see the capability of running our own desktop applications remotely via a web interface, and this is where the issues with the GPL come into play.</p>

<p>Let's say that you created a document converter to convert between multiple file types. It's a command line application where you simply input filenames as arguments, and since you are a supporter of copyleft, you license it under the GNU GPL (version 2 or 3, it does not matter). At this point someone can take your software, enhance it (perhaps by allowing it to convert to more file types), hook it up to a web front-end, and at this point they are now allowing your program to be used, while modified, and yet they are not at all obliged to distribute their modified copy. Through the web they have effectively bypassed your copyleft license restrictions.</p>

<p>The web seems to be a force actively working against the Free Software movement, and although we were happy at first, seeing that all the sources would be available to us since HTML, CSS, and JavaScript are all on the client-side and in plain text, we have seen that oppressors are finding new ways of making it harder use those. What's more, even our own applications that we write that are not intended for the web can be used against us. Therefore, in your next project, when you are thinking about using the GPL (again, version 2 or 3) please consider using the AGPL instead, as we are moving in a direction where it will be more and more needed.</p>


<?php
require 'templates/blog-footer.php';
?>