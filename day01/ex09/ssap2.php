#!/usr/bin/php
<?php

function	is_chr($chr)
	{
		$i = ord($chr);
		if (($i >= 97 && $i <= 122) || ($i >= 65 && $i <= 90))
			return TRUE;
		else
			return FALSE;
	}
	function	is_num($chr)
	{
		$i = ord($chr);
		if ($i >= 48 && $i <= 57)
			return TRUE;
		else
			return FALSE;
	}

	include("../ex03/ft_split.php");
	unset($argv[0]);
	$str = implode(" ", $argv);
	$arr = ft_split($str);
	foreach ($arr as $val) {
		echo $val."\n";
	}
	echo "\n";
	$arr_chr = array();
	$arr_num = array();
	$i = 0;
	foreach ($arr as $val) {
		if (is_chr($val[0]))
		{
			echo $val." char\n";
			array_push($arr_chr, $val);
			unset($arr[$i]);
		}
		else if (is_num($val[0]))
		{
			echo $val." num\n";
			array_push($arr_num, $vasl);
			unset($arr[$i]);
		}
		else
			echo $val." spec\n";
		$i++;
	}
	echo "\n";

	foreach ($arr_chr as $val) {
		echo $val."\n";
	}
	foreach ($arr_num as $val) {
		echo $val."\n";
	}
	foreach ($arr as $val) {
		echo $val."\n";
	}
?>