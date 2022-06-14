#!/usr/bin/php
<?php
	$new_string = [];
	for ($i = 1; $i < $argc; $i++)
	{
		$string = preg_split("/[\s]+/", $argv[$i]);
		$new_string = array_merge($new_string, $string);
	}
	$isnum = [];
	$isalp = [];
	$isascii = [];
	$isother = [];
	$final_arr = [];
	foreach($new_string as $value)
	{
		if (is_numeric($value[0]))
			array_push($isnum, $value);
		else if (preg_match ('/^[A-Za-z]+$/', $value))
			array_push($isalp, $value);
		else if (preg_match('/[^0-9A-Za-z]/', $value[0]))
			array_push($isascii, $value);
		else if (preg_match ('/^[A-Za-z0-9]+$/', $value[0]))
			array_push($isother, $value);
	}
	sort($isnum, SORT_STRING);
	sort($isalp, SORT_FLAG_CASE | SORT_STRING);
	sort($isascii);
	sort($isother, SORT_FLAG_CASE | SORT_STRING);

	// $item1 = 0;
	// $item2 = 1;
	// $inneritem = 1;
	// $counter = 0;

	// while ($counter < count($isother))
	// {
	// 	print_r($isother);
	// 	while ($item2 < count($isother))
	// 	{
	// 		while ($isother[$item1][0] === $isother[$item2][0])
	// 		{
	// 			print_r("HELLO");
	// 			if ($isother[$item1][$inneritem] === $isother[$item2][$inneritem])
	// 				$inneritem = $inneritem + 1;
	// 			else if ($isother[$item1][$inneritem] > $isother[$item2][$inneritem])
	// 			{
	// 				$temp = $isother[$item1];
	// 				$isother[$item1] = $isother[$item2];
	// 				$isother[$item2] = $temp;
	// 				print_r($isother);
	// 			}
	// 			$item1++;
	// 		}
	// 		$item2++;
	// 	}
	// 	$item1++;
	// 	$item2 = $item1+1;
	// 	$counter++;
	// }

	$i = 0;
	$y = 0;
	$x = 0;
	print_r($isalp);
	print_r($isother);
	while ($x < count($isother))
	{
		if ($isother[$i][0] === $isalp[$y][0] && $isother[$i + 1][0] === $isalp[$y][0])
			{
				$i++;
				print_r("HELLO");
			}
		else if ($isother[$i][0] === $isalp[$y][0])
		{
			while ($isother[$i][0] === $isalp[$y][0])
			{
				$y = $y + 1;
				array_splice($isalp, $y, 0, $isother[$i]);
				$i = $i + 1;
			}
		}
		else
		{
			array_splice($isalp, $y, 0, $isother[$i]);
			$i = $i + 1;
		}
		$y = $y + 1;
		$x = $x + 1;
	}

	$final_arr = array_merge($isalp, $isnum);
	$final_arr = array_merge($final_arr, $isascii);
	foreach($final_arr as $value)
		print($value."\n");
?>
