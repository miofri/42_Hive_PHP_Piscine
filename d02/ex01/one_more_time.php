#!/usr/bin/php
<?php
	if ($argc === 1)
	{
		exit(0);
	}

	$argv[1] = mb_strtolower($argv[1]);
	$my_str = preg_split("/\s+/", trim($argv[1]));

	$days_fr = array("lundi", "mardi", "mercedi", "jeudi", "vendredi", "samedi", "dimanche");
	$days_en = array("monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday");

	$month_fr = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
	$month_en = array("january", "february", "march", "april", "may", "june", "july", "august", 'september', "october", "november", "december");

	if (count($my_str) !== 5){
		echo "Wrong Format\n";
		exit(0);
	}

	$my_time = preg_split("/:/", $my_str[4]);

	foreach ($my_time as $value)
	{
		if (strlen($value) != 2)
		{
			echo "Wrong Format\n";
			exit(0);
		}
	}

	if((in_array($my_str[0], $days_fr) == FALSE) || (in_array($my_str[2], $month_fr) == FALSE))
	{
		echo "Wrong Format\n";
		exit(0);
	}
	else if (strlen($my_str[3]) !== 4)
	{
		echo "Wrong Format\n";
		exit(0);
	}
	else if (strlen($my_str[1]) !== 2 && strlen($my_str[1]) !== 1)
	{
		echo "Wrong Format\n";
		exit(0);
	}
	else if ($my_str[1] > 31 || $my_str[1] < 1)
	{
		echo "Wrong Format\n";
		exit(0);
	}

	$day_pos = array_search($my_str[0], $days_fr);
	$my_str[0] = $days_en[$day_pos];
	$month_pos = array_search($my_str[2], $month_fr);
	$my_str[2] = $month_en[$month_pos];

	array_push($my_str, "+0100");
	$final_str = implode(" ", $my_str);
	print (strtotime($final_str));
	echo "\n"
?>
