<?php
$act = $_GET["action"];
if ($_GET["name"] && $_GET["action"])
{
	switch($act)
	{
		case ($act === "set"):
			setcookie($_GET["name"], $_GET["value"], time() + 3600, "/");
			break;
		case ($act === "get"):
			if ($_GET["name"] && $_COOKIE[$_GET["name"]] && count($_GET) === 2)
				echo $_COOKIE[$_GET["name"]]."\n";
			break;
		case ($act === "del"):
			if ($_GET["name"])
				setcookie($_GET["name"], '', 0);
			break;
	}
}
?>
