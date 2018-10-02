#!/usr/bin/php
<?php
	$arg = explode(" ", $argv[1]);
	$i = 0;
	foreach ($arg as $arr) {
		if ($arr === "")
			unset($arg[$i]);
		$i++;
	}
	$first = $arg[0];
	unset($arg[0]);
	echo implode(" ", $arg);
	echo " ".$first."\n";
?>