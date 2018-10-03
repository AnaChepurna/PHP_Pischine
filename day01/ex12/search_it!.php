#!/usr/bin/php
<?php

	function search_it($search, $arg)
	{
		$arr = explode(":", $arg);
		if ($arr[0] == $search)
			echo $arr[1]."\n";
	}

	$search = $argv[1];
	$i = 2;
	while ($i < $argc)
	{
		search_it($search, $argv[$i]);
		$i++;
	}
?>
