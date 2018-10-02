<?php
	function ft_split($arg)
	{
		$arg = explode(" ", $arg);
		sort($arg);
		$i = 0;
		foreach ($arg as $arr) {
			if ($arr === "")
				unset($arg[$i]);
			$i++;
		}
		return ($arg);
	}
?>