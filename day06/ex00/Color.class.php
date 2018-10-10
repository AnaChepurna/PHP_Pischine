<?php
Class Color {
	public static $verbose = False;
	public $red;
	public $green;
	public $blue;

	public function __construct($rgb) {
		if (isset($rgb["rgb"]))
		{
			$rgb["rgb"] = intval($rgb["rgb"]);
			$this->red = ($rgb["rgb"] >> 16) & 0xff;
			$this->green = ($rgb["rgb"] >> 8) & 0xff;
			$this->blue = $rgb["rgb"] & 0xff;
		}
		elseif (isset($rgb["red"]) && isset($rgb["green"]) && isset($rgb["blue"]))
		{
			$this->red = $rgb["red"];
			$this->green = $rgb["green"];
			$this->blue = $rgb["blue"];
		}
		if (self::$verbose)
			print($this." constructed.\n");
   }

   public function __destruct()
   {
   		if (self::$verbose)
			print($this." destructed.\n");
   }

   public function __toString()
   {
   		return('Color( red: ' . sprintf("%3s", $this->red) .', green: ' . sprintf("%3s", $this->green) . ', blue: '. sprintf("%3s", $this->blue) .' )');
   }

   public static function doc()
   {
   		$fd = fopen("Color.doc.txt", 'r');
   		while ($fd && !feof($fd))
   			echo fgets($fd);
   		echo "\n";
   }

   public function add($add)
   {
   	$red = $this->red + $add->red;
   	$green = $this->green + $add->green;
   	$blue = $this->blue + $add->blue;
   	return new Color(array('red' => $red , 'green' => $green , 'blue' => $blue ));
   }

   public function sub($add)
   {
   	$red = $this->red - $add->red;
   	$green = $this->green - $add->green;
   	$blue = $this->blue - $add->blue;
   	return new Color(array('red' => $red , 'green' => $green , 'blue' => $blue ));
   }

   public function mult($add)
   {
   	$red = $this->red * $add;
   	$green = $this->green * $add;
   	$blue = $this->blue * $add;
   	return new Color(array('red' => $red , 'green' => $green , 'blue' => $blue ));
   }
}
?>