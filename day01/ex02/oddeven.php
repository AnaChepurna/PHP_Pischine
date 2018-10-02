#!/usr/bin/php
<?php
	while(42)
	{
		echo "Enter a number: ";
		$num = rtrim(fgets(STDIN));
		if (feof(STDIN))
			break;
		if (!is_numeric($num))
			echo "'$num' is not a number\n";
		else
		{
			if ($num % 2)
				echo "The number $num is odd\n";
			else
				echo "The number $num is even\n";
		}
	}
?>