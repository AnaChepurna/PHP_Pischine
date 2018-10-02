#!/usr/bin/php
<?php
	include("../ex03/ft_split.php");
	unset($argv[0]);
	$str = implode(" ", $argv);
	foreach (ft_split($str) as $val) {
		echo $val."\n";
	}
?>