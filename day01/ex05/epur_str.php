#!/usr/bin/php
<?php
	$arg = explode(" ", $argv[1]);
	$i = 0;
	foreach ($arg as $arr) {
		if ($arr === "")
			unset($arg[$i]);
		$i++;
	}
	echo implode(" ", $arg)."\n";
?>