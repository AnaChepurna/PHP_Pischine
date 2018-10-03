#!/usr/bin/php
<?php
	function get_array()
	{
		$arr = array();
		fgets(STDIN);
		while (!feof(STDIN))
			array_push($arr, fgets(STDIN));
		sort($arr);
		return ($arr);
	}

	function get_average($arr)
	{
		$count = 0;
		$grade = 0;

		foreach ($arr as $str) {
			$divide = explode(";", $str);
			if ($divide[2] != "moulinette" && $divide[1] != "")
			{
				$count++;
				$grade += $divide[1];
			}
		}
		$grade = $grade / $count;
		echo $grade."\n";
	}

	function get_user($user, $arr)
	{
		$count = 0;
		$grade = 0;
		$i = 0;

		foreach ($arr as $str) {
			$divide = explode(";", $str);
			if ($divide[0] == $user && $divide[1] != "" && $divide[2] != "moulinette")
			{
				$count++;
				$grade += $divide[1];
			}
			if ($divide[0] == $user)
				$i++;
		}
		$grade = $grade / $count;
		echo $user.":".$grade."\n";
		return ($i);
	}

	function get_average_user($arr)
	{
		$count = count($arr);
		for ($i = 1; $i < $count;)
		{
			$divide = explode(";", $arr[$i]);
			$i += get_user($divide[0], $arr);
		}
	}

	function get_user_mul($user, $arr)
	{
		$count_peer = 0;
		$grade_peer = 0;
		$count_mul = 0;
		$grade_mul = 0;
		$i = 0;

		foreach ($arr as $str) {
			$divide = explode(";", $str);
			if ($divide[0] == $user && $divide[1] != "")
			{
				if ($divide[2] != "moulinette")
				{
					$count_peer++;
					$grade_peer += $divide[1];
				}
				else
				{
					$count_mul++;
					$grade_mul += $divide[1];
				}
			}
			if ($divide[0] == $user)
				$i++;
		}
		$grade_peer = $grade_peer / $count_peer;
		$grade_mul = $grade_mul / $count_mul;
		$grade_peer -= $grade_mul;
		echo $user.":".$grade_peer."\n";
		return ($i);
	}

	function get_moulinette_variance($arr)
	{
		$count = count($arr);
		for ($i = 1; $i < $count;)
		{
			$divide = explode(";", $arr[$i]);
			$i += get_user_mul($divide[0], $arr);
		}
	}
	
	if ($argc == 1)
		exit (0);
	$arr = get_array();
	$str = $argv[1];
	if ($str == "average")
		get_average($arr);
	if ($str == "average_user")
		get_average_user($arr);
	if ($str == "moulinette_variance")
		get_moulinette_variance($arr);
	//var_dump($arr);
?>
