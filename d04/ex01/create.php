<?php
	if ($_POST["login"] && $_POST["passwd"] && $_POST["submit"]  && $_POST["submit"] === "OK")
	{
		if (file_exists("../private") === FALSE)
			mkdir("../private");
		if (file_exists("../private/passwd") ===  FALSE)
			file_put_contents("../private/passwd", null);
		$us = unserialize(file_get_contents("../private/passwd"));
		$exist = 0;
		if (!empty($us))
		{
			foreach ($us as $key => $value)
			{
				if ($value["login"] === $_POST["login"])
					$exist = 1;
			}
		}
		if ($exist === 1)
			echo "ERROR\n";
		else
		{
			$test["login"] = $_POST["login"];
			$test["passwd"] = hash('whirlpool', $_POST["passwd"]);
			$new_us[] = $test;
			file_put_contents("../private/passwd", serialize($new_us));
			echo "OK\n";
		}
	}
	else
		echo "ERROR\n";
?>
