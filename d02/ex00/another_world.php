#!/usr/bin/php
<?php
	$my_str = preg_split("/\s+/", trim($argv[1]));
	$my_str = implode(" ", $my_str);
	print($my_str);
?>
