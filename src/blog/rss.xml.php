<?php
require 'config.php';
?>
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0"
  xmlns:content="http://purl.org/rss/1.0/modules/content/"
  xmlns:dc="http://purl.org/dc/elements/1.1/">
	<channel>
		<title><?= $sitetitle ?></title>
		<description><?= $description ?></description>
		<link><?= $siteurl ?></link>
<?php
$dir_files = scandir(dirname(__FILE__), SCANDIR_SORT_DESCENDING);
foreach($dir_files as $file_info) {
	if(!str_ends_with($file_info, ".cfg.php") or str_starts_with($file_info, "draft_"))
		continue;

	require dirname(__FILE__) . "/" . $file_info;
?>
		<item>
			<title><?= $title ?></title>
			<link><?= $siteurl ?>/blog/<?= $file_info ?></link>
			<guid><?= $siteurl ?>/blog/<?= $file_info ?></guid>
			<dc:date><?= $created ?>T00:00:00Z</dc:date>
			<author><?= $author ?></author>
			<description><?= $description ?></description>
		</item>
<?php
}
?>
	</channel>
</rss>
