#!/usr/bin/php
<?php
	$string = preg_split("/\s+/", $argv[1]);
	$string = array_filter($string);
	$first_item = array_shift($string);
	array_push($string, $first_item);
	$string = implode(" ", $string);
	print($string);
	echo "\n"
?>
