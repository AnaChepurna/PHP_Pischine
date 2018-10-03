#!/usr/bin/php
<?php
	if ($argc != 2) {
		echo "Incorrect Parametrs\n";
		exit(1);
	}
	if (preg_match("/^[ \t]*([-+]?\d+)[ \t]*([\+\-\*\%\/])[ \t]*([-+]?\d+)[ \t]*$/", $argv[1], $match) === 0) {
		echo "Syntax Error\n";
		exit(1);
	}
	$first = $match[1];
	$operator = $match[2];
	$second = $match[3];
	if ($operator == "+") {
		echo $first + $second;
	}
	elseif ($operator == "-") {
		echo $first - $second;
	}
	elseif ($operator == "*") {
		echo $first * $second;
	}
	elseif ($operator == "/") {
		if ($second == "0")
			echo "Error: Division by zero";
		else
			echo $first / $second;
	}
	elseif ($operator == "%") {
		if ($second == "0")
			echo "Error: Division by zero";
		else
			echo $first % $second;
	}
	echo "\n";
?>