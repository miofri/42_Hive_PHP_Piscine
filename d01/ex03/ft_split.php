#!/usr/bin/php

<?php
function ft_split($str){
	$str = trim($str);
	$array = preg_split("/[\s]+/", $str);
	$array = array_filter($array);
	sort($array);
	return ($array);
}
?>
