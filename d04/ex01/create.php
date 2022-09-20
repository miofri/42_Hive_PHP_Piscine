<?php
	if ($_POST["login"] && $_POST["passwd"] && $_POST["submit"]  && $_POST["submit"] === "OK")
	{
		if (file_exists("../private") === FALSE)
			mkdir("../private");
		if (file_exists("../private/passwd") ===  FALSE)
			file_put_contents("../private/passwd", null);
		$unserialized = unserialize(file_get_contents("../private/passwd"));
		$exist = 0;
		if (!empty($unserialized))
		{
			foreach ($unserialized as $key => $value)
			{
				if ($value["login"] === $_POST["login"])
					$exist = 1;
			}
			$len = count($unserialized);
		}
		else {
			$len = 0;
		}

		if ($exist === 1)
			echo "ERROR\n";
		else
		{
			$unserialized[$len] = (array) ['login' => $_POST["login"], "passwd" => hash('whirlpool', $_POST["passwd"])];
			file_put_contents("../private/passwd", serialize($unserialized));
			echo "OK\n";
		}
	}
	else
		echo "ERROR\n";
?>
