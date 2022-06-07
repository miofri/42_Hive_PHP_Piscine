#!/usr/bin/php

<?php
function ft_split($str){
	$str = trim($str);
	$array = preg_split("/\s+/", $str);
	sort($array);
	return ($array);
}
?>
