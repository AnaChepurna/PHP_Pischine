#!/usr/bin/php
<?php
	function ft_split($arg)
	{
		$arg = explode(" ", $arg);
		$i = 0;
		foreach ($arg as $arr) {
			if ($arr === "")
				unset($arg[$i]);
			$i++;
		}
		return ($arg);
	}

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

	function get_value($c)
	{
		if (is_chr($c))
			return (ord($c));
		if (is_num($c))
			return (ord($c) + 100);
		return (ord($c) + 200);
	}

	function str_compare($a, $b)
	{
		$i = 0;
		while ($a[$i] || $b[$i])
		{
			$ca = get_value($a[$i]);
			$cb = get_value($b[$i]);
			if ($ca != $cb)
				return ($ca - $cb);
			$i++;
		}
		return (0);
	}

	function ft_sort($arg)
	{
		$i = 0;
		while ($i < count($arg) - 1)
		{
			if (str_compare($arg[$i], $arg[$i + 1]) > 0)
			{
				$buf = $arg[$i];
				$arg[$i] = $arg[$i + 1];
				$arg[$i + 1] = $buf;
				if ($i)
					$i--;
			}
			else
				$i++;
		}
		return ($arg);
	}

	unset($argv[0]);
	$str = implode(" ", $argv);
	foreach (ft_sort($arg) as $val) {
		echo $val."\n";
	}
?>