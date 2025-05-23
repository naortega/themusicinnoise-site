<?php
require 'config.php';
require '2018-03-18-hosting-my-own-git.cfg.php';
require 'templates/blog-header.php';
?>
<p>I have recently put up my own git hosting instance on the VPS at <a href="#"
	target="_blank" >git.themusicinnoise.net</a>. Essentially, I'm getting
tired that I have repos in 3 different places, so I finally decided to bring
them all into one, and with that to kill another bird with the same stone:
getting rid of the need for me to navigate web UIs. Something that annoyed me
with GitLab, Github, NotABug, and alike, is that they make use of web
interfaces for tasks like pull requests, creating repos, issue trackers, etc.
when most of these can be done with the same tool: a mailing list. I've already
gone over this before in <a href="/blog/2017-05-02-patch-files" >my post on patch
files</a>. What's more, now to create new repos I can just use a script I have
made.</p>

<p>Point is, from now on all my repos that I have chosen to maintain (that is,
those I care about) are on that server, and they can still be accessed via Git,
but if you wanna send patches or issues then you'll have to send them to my
e-mail. If any of them form a community I'll create a mailing list for
them.</p>

<p><b>UPDATE 2020/03/19:</b> I've given up on maintaining my own git server.
Currently I'm still using GitLab, but I may end up switching to fossil as an
alternative to git depending on how things go.</p>

<?php
require 'templates/blog-footer.php';
?>
