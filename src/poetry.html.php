<?php
require "config.php";

$title = "Poetry";
$description = "A collection of some of my poems.";
$keywords = "poetry, religion, catholicism";

require "templates/header.php";
?>

<p>I'm not truly super into writing poetry, or reading it for that
matter, but every now and then I do like to read certain special poems,
and even write some poetry of my own. That being said, it's truly not
all that different from writing song lyrics. I guess my point is don't
expect much.</p>

<ul>
<?php
$dir_files = scandir(dirname(__FILE__) . "/poetry/", SCANDIR_SORT_DESCENDING);
foreach($dir_files as $file_info) {
	if(!str_ends_with($file_info, ".cfg.php") or str_starts_with($file_info, "draft_"))
		continue;

	require dirname(__FILE__) . "/poetry/" . $file_info;
	$post_url = "poetry/" . str_replace(".cfg.php", ".html", $file_info);
?>
	<li><a href="<?= $post_url ?>" ><?= $title ?></a></li>
<?php
}
?>
</ul>

<?php
require "templates/footer.php"
?>
