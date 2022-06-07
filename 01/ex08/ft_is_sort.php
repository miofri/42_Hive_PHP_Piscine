#!/usr/bin/php
<?php
	function ft_is_sort($u_array)
	{
		$s_array = $u_array;
		sort($s_array);
		if ($s_array != $u_array)
			return (FALSE);
		else
			return (TRUE);
	}
?>
