#!/usr/bin/php
<?php

	function get_month($month)
	{
		$month_arr = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet",
			"aout", "septembre", "octobre", "novembre", "decembre");
		$i = -1;
		while ($i++ < 12)
			if ($month == $month_arr[$i])
				return ($i + 1);
		return (-1);
	}
	
	if ($argc != 2)
		exit (1);
	if (preg_match("/^([A-Za-z][a-z]+) (\d\d?) ([A-Za-z][a-z]+) (\d\d\d\d) (\d\d):(\d\d):(\d\d)$/", $argv[1], $time) === 0) {
		echo "Wrong Format\n";
		exit (1);
	}
	$day = strtolower($time[1]);
	if ($day == "lundi" || $day == "mardi" || $day == "mercredi" || $day == "jeudi" || $day == "vendredi" ||
		$day == "samedi" || $day == "dimanche");
	else {
		echo "Wrong Format\n";
		exit (1);
	}

	$month = strtolower($time[3]);
	$mm = get_month($month);
	if ($mm == -1) {
		echo "Wrong Format\n";
		exit (1);
	}
	date_default_timezone_set("Europe/Paris");
	$res = mktime($time[5], $time[6], $time[7], $mm, $time[2], $time[4]);
	if (!$res)
		echo "Wrong Format\n";
	else
		echo $res."\n";
?>