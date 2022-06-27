<?php
	if (file_exists("../private/passwd") && $_POST["login"] && $_POST["oldpw"] && $_POST["newpw"] && $_POST["submit"]  && $_POST["submit"] === "OK")
	{
		$us = unserialize(file_get_contents("../private/passwd"));
		$changed = 0;
		if (!empty($us))
		{
			foreach ($us as $key => $value)
			{
				if ($value["login"] === $_POST["login"] && $value["passwd"] === hash("whirlpool", $_POST["oldpw"]) && $_POST["oldpw"])
				{
						$us[$key]["passwd"] = hash("whirlpool", $_POST["newpw"]);
						$changed = 1;
				}
			}
			if ($changed === 1)
			{
				file_put_contents("../private/passwd", serialize($us));
				echo "OK\n";
			}
			else
				echo "ERROR\n";
		}
		else
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>
