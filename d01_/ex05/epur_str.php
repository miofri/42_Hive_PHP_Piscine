#!/usr/bin/php
<?php
	$string = preg_split("/\s+/", $argv[1]);
	$string = array_filter($string);
	$new_string = implode(" ", $string);
	echo ($new_string);
?>
