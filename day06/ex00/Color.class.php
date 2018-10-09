<?php
Class Color {
	public static $verbose = False;
	public $red;
	public $green;
	public $blue;

	function __construct($rgb) {
		if ($rgb["rgb"])
		{
			$rgb["rgb"] = intval($rgb["rgb"]);
			$red = ($rgb["rgb"] >> 16) & 0xff;
			$green = $rgb["rgb"] >> 8) & 0xff;
			$green = $rgb["rgb"] & 0xff;
		}
		elseif ($rgb["red"] && $rgb["green"] && $rgb["blue"])
		{
			$red = intval($rgb["red"]);
			$green = intval($rgb["green"]);
			$green = intval($rgb["blue"]);
		}
		if (self::$verbose)
			print($this." constructed.\n");
   }

   function __toString()
   {
   		return('Color( red: ' . sprintf("%3s", $red) .', green: ' . sprintf("%3s", $green) . ', blue: '. sprintf("%3s", $blue) .' )');
   }

   
}
?>