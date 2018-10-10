<?php

require_once '../ex00/Color.class.php';

Class Vertex {
	public static $verbose = False;
	private $_x;
	private $_y;
	private $_z;
	private $_w = 1;
	private $_color;

	public function __construct($arr)
	{
		//var_dump($arr);
		$this->_x = $arr["x"];
		$this->_y = $arr["y"];
		$this->_z = $arr["z"];
		if (isset($arr["w"]))
			$this->_w = $arr["w"];
		if (isset($arr["color"]))
		{
			$this->_color = $arr["color"];
			//var_dump($this->_color);
			//var_dump($arr["color"]);
		}
		else
			$this->_color = new Color(array("rgb" => 0xffffff));
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
		$str = 'Vertex( x: ' . sprintf("%.2f", $this->x) .', y: ' . sprintf("%.2f", $this->y) . ', z: '. sprintf("%.2f", $this->z) .', w: '. sprintf("%.2f", $this->w);
		if (self::$verbose)
			$str = $str. ", ".$this->_color;
		$str = $str." )";
		return ($str);
	}

	public static function doc()
   	{
   		$fd = fopen("Vertex.doc.txt", 'r');
   		while ($fd && !feof($fd))
   			echo fgets($fd);
   		echo "\n";
  	}
}
?>