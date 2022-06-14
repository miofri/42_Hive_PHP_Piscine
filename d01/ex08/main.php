#!/usr/bin/php
<?PHP
include("ft_is_sort.php");
$tab = array("!/@#;^", "42", "Hello World", "hi", "zZzZzZz");
$tab[] = "What are we doing now ?";
if (ft_is_sort($tab))
echo "The array is sorted\n";
else
echo "The array is not sorted\n";
?>
<!--
// $temp;
	// $i = 0;
	// $char_counter = 0;
	// $slen = 0; -->

<!-- while ($i < count($isalp))
	{
		if ($isalp[$i][$char_counter] === $isalp[$i + 1][$char_counter])
		{
			print("I AM ".$isalp[$i]." comparing with ".$isalp[$i + 1]);
			while ($slen < strlen($isalp[$i]))
			{
				$char_counter = $char_counter + 1;
				if ($isalp[$i][$char_counter] > $isalp[$i + 1][$char_counter])
				{

					$temp = $isalp[$i + 1];
					$isalp[$i + 1] = $isalp[$i];
					$isalp[$i] = $temp;
					break;
				}
				else
					$char_counter++;
				$slen++;
				print ($slen."\n");
			}
		}
		$slen = 0;
		$char_counter = 0;
		$i = $i + 1;
	} -->
