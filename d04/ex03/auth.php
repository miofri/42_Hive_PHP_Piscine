<?php
	function auth($login, $passwd)
	{
		if ($login && $passwd)
		{
			$unserialized = unserialize(file_get_contents("../private/passwd"));
			foreach ($unserialized as $key => $value)
			{
				if ($value["login"] === $login && $value["passwd"] === hash("whirlpool", $passwd) && $passwd)
					return(TRUE);
				else
					return(FALSE);
			}
		}
		else
			return FALSE;
	}
?>
