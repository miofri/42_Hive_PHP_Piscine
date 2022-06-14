<?php
	function auth($login, $passwd)
	{
		if ($login && $passwd)
		{
			$us = unserialize(file_get_contents("../private/passwd"));
			foreach ($us as $key => $value)
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
