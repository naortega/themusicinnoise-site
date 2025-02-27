<?php
require "config.php";

$title = "Blog";
$description = "A collection of posts on miscellaneous subjects.";
$keywords = "blog, catholicism, religion, faith, computers, programming, lifestyle, bible, scripture";

require "templates/header.php";
?>
<h2>Feeds</h2>
<p><a href="rss.xml" >RSS</a> | <a href="atom.xml" >Atom</a></p>

<h2>Posts</h2>
<ul>
<?php
$dir_files = scandir(dirname(__FILE__), SCANDIR_SORT_DESCENDING);
foreach($dir_files as $file_info) {
	if(!str_ends_with($file_info, ".cfg.php") or str_starts_with($file_info, "draft_"))
		continue;

	require dirname(__FILE__) . "/" . $file_info;
	$post_url = str_replace(".cfg.php", ".html", $file_info);
?>
	<li><time><?= $created ?></time> - <a href="<?= $post_url ?>" ><?= $title ?></a></li>
<?php
}
?>
</ul>

<?php
require "templates/footer.php"
?>
