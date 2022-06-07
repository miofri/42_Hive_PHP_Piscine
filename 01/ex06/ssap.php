#!/usr/bin/php
<?php
	$new_string = [];
	for ($i = 1; $i < $argc; $i++)
	{
		$string = preg_split("/\s+/", $argv[$i]);
		$new_string = array_merge($new_string, $string);
	}
	sort($new_string);
	foreach($new_string as $value)
		print($value."\n");

?>
