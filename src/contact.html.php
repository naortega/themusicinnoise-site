<?php
require "config.php";

$title = "Contact";
$description = "Directory of mediums I can be contacted by, as well as a link to my PGP key.";
$keywords = "email, pgp, irc, contact";

require "templates/header.php";
?>

<p>I am available by various means of online communication. If you are
going to send me an e-mail then please encrypt your messages by using
<a href="/nicolas@ortegas.org_pub.asc" >my public encryption key</a>. If
you attach or send me a link to your public key I will make sure to
encrypt any and all replies.</p>

<p>Don't know how to encrypt e-mails? Don't worry! Just follow the FSF's
<a href="https://emailselfdefense.fsf.org" target="_blank" >E-Mail
Self-Defense Guide</a> and encryption will be as easy as clicking a few
buttons. If you use a web mail service (such as GMail or Yahoo!) you can
use <a href="https://www.mailvelope.com/" target="_blank" >Mailvelope</a>
to encrypt your e-mails following their very simple instructions.</p>

<h2>E-Mail</h2>
<p><a href="mailto:nicolas@ortegas.org" >nicolas@ortegas.org</a> -
<a href="/nicolas@ortegas.org_pub.asc" >Public PGP Key</a></p>

<h2>IRC</h2>
<p>Aliases: nortega, naortega</p>
<ul>
	<li>irc.libera.chat:</li>
	<ul>
		<li><a href="ircs://irc.libera.chat:6697/archlinux" >#archlinux</a></li>
		<li><a href="ircs://irc.libera.chat:6697/archlinuxarm" >#archlinuxarm</a></li>
		<li><a href="ircs://irc.libera.chat:6697/esperanto" >##esperanto</a></li>
		<li><a href="ircs://irc.libera.chat:6697/fsf" >#fsf</a></li>
		<li><a href="ircs://irc.libera.chat:6697/gnu" >#gnu</a></li>
		<li><a href="ircs://irc.libera.chat:6697/gnu-offtopic" >#gnu-offtopic</a></li>
	</ul>
</ul>

<h2>Matrix</h2>
<p>Alias: @nortega:matrix.org</p>
<ul>
	<li>#debian:matrix.debian.social</li>
</ul>

<?php
require "templates/footer.php"
?>
