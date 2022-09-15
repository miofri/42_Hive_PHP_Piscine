#!/usr/bin/php
<?php
	if (count($argv) != 4){
		echo "Incorrect Parameters\n";
		exit(0);
	}
	$f_num = trim($argv[1]);
	$operator = trim($argv[2]);
	$s_num = trim($argv[3]);
	switch ($operator)
	{
		case "+":
			print($f_num + $s_num);
			break;
		case "-":
			print($f_num - $s_num);
			break;
		case "*":
			print($f_num * $s_num);
			break;
		case "/":
			print($f_num / $s_num);
			break;
		case "%":
			print($f_num % $s_num);
			break;
	}
	print("\n");
?>
