<?php
require 'config.php';
?>
<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="<?= $lang ?>">
	<title type="text"><?= $sitetitle ?></title>
	<subtitle type="text"><?= $description ?></subtitle>
	<updated><?= date("Y-m-d\Th:i:s\Z") ?></updated>
	<link rel="alternate" type="text/html" href="<?= $siteurl ?>" />
	<id><?= $siteurl ?>/blog/atom.xml</id>
	<link rel="self" type="application/atom+xml" href="<?= $siteurl ?>/blog/atom.xml" />
<?php
$dir_files = scandir(dirname(__FILE__), SCANDIR_SORT_DESCENDING);
foreach($dir_files as $file_info) {
	if(!str_ends_with($file_info, ".cfg.php"))
		continue;

	require dirname(__FILE__) . "/" . $file_info;
?>
	<entry>
		<title type="text"><?= $title ?></title>
		<link rel="alternate" type="text/html" href="<?= $siteurl ?>/blog/<?= $file_info ?>" />
		<id><?= $siteurl ?>/blog/<?= $file_info ?></id>
		<updated><?= $updated ?>T00:00:00Z</updated>
		<published><?= $created ?>T00:00:00Z</published>
		<author>
			<name><?= $author ?></name>
			<uri><?= $siteurl ?></uri>
		</author>
		<summary type="text"><?= $description ?></summary>
	</entry>
<?php
}
?>
</feed>
