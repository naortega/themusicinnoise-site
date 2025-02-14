<?php
$title = "Blog";
$description = "A collection of posts on miscellaneous subjects.";
$keywords = "blog, catholicism, religion, faith, computers, programming, lifestyle, bible, scripture";

require "config.php";
require "templates/header.php";
?>
<h2>Feeds</h2>
<p><a href="rss.xml" >RSS</a> | <a href="atom.xml" >Atom</a></p>

<h2>Posts</h2>
<ul>
<?php
$post_iter = new DirectoryIterator(dirname(__FILE__));
foreach($post_iter as $file_info) {
	if(!str_ends_with($file_info->getFileInfo(), ".cfg.php"))
		continue;

	require dirname(__FILE__) . $file_info->getFilename();
?>
	<li><time><?= $created ?></time> - <a href="<?= $file_info->getFileInfo() ?>" ><?= $title ?></a></li>
<?php
}
?>
</ul>

<?php
require "templates/footer.php"
?>
