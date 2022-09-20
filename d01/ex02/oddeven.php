#!/usr/bin/php
<?php
while (1)
{
	echo "Enter a number: ";
	if ($answer = fgets(STDIN))
	{
		$answer = trim($answer);
		if (!is_numeric($answer))
			echo "'$answer' is not a number\n";
		else if (is_numeric($answer))
		{
			if ($answer % 2 === 0)
				echo "The number $answer is even\n";
			else
				echo "The number $answer is odd\n";
		}
	}
	if (feof(STDIN)) {
		exit("^D\n");
	}
	else{
		exit("\n");
	}
}
?>
