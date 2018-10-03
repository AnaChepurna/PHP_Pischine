#!/usr/bin/php
<?php
	if ($argc != 4) {
		echo "Incorrect Parametrs\n";
		exit(1);
	}
	$argv[1] = trim($argv[1]);
	$argv[2] = trim($argv[2]);
	$argv[3] = trim($argv[3]);
	if ($argv[2] == "+") {
		echo $argv[1] + $argv[3];
	}
	elseif ($argv[2] == "-") {
		echo $argv[1] - $argv[3];
	}
	elseif ($argv[2] == "*") {
		echo $argv[1] * $argv[3];
	}
	elseif ($argv[2] == "/") {
		if ($argv[3] == "0")
			echo "Error: Division by zero";
		else
			echo $argv[1] / $argv[3];
	}
	elseif ($argv[2] == "%") {
		if ($argv[3] == "0")
			echo "Error: Division by zero";
		else
			echo $argv[1] % $argv[3];
	}
	echo "\n";
?>