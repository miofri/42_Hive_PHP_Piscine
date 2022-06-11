#!/usr/bin/php
<?php

	function compare($str1, $str2)
	{
		$i = 0;
		$line = "abcdefghijklmnopqrstuvwxyz0123456789!\"
				#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
		while (($i < strlen($str1)) || ($i < strlen($str2)))
		{
			$str1_sorted = stripos($line, $str1[$i]);
			$str2_sorted = stripos($line, $str2[$i]);
			if ($str1_sorted > $str2_sorted)
				return (1);
			else if ($str1_sorted < $str2_sorted)
				return (-1);
			else
				$i++;
		}
	}
	$new_string = [];
	for ($i = 1; $i < $argc; $i++)
	{
		$string = preg_split("/\s+/", $argv[$i]);
		$new_string = array_merge($new_string, $string);
	}
	usort($new_string, "compare");
	foreach($new_string as $value)
		print($value."\n");
?>
