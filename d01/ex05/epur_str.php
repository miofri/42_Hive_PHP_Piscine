#!/usr/bin/php
<?php
	$string = preg_split("/\s+/", $argv[1]);
	$new_string = implode(" ", $string);
	echo ($new_string);
?>
