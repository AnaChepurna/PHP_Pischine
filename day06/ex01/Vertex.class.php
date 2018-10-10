<?php

require_once '../ex00/Color.class.php';

Class Vertex {
	public static $verbose = False;
	private $_x;
	private $_y;
	private $_z;
	private $_w;
	private $_color;

	public function __construct($arr)
	{
		$this->_w = 1;
		$this->_x = $arr["x"];
		$this->_y = $arr["y"];
		$this->_z = $arr["z"];
		if (isset($arr["w"]))
			$this->_w = $arr["w"];
		if (isset($arr["color"]) && $arr["color"] instanceof Color)
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
		$str = 'Vertex( x: ' . sprintf("%.2f", $this->_x) .', y: ' . sprintf("%.2f", $this->_y) . ', z: '. sprintf("%.2f", $this->_z) .', w: '. sprintf("%.2f", $this->_w);
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

  	public function getX()
  	{
  		return ($this->_x);
  	}

  	public function getY()
  	{
  		return ($this->_y);
  	}

  	public function getZ()
  	{
  		return ($this->_z);
  	}

  	public function getW()
  	{
  		return ($this->_w);
  	}

  	public function getColor()
  	{
  		return ($this->_color);
  	}

  	public function setX($x)
  	{
  		$this->_x = $x;
  	}

  	public function setY($y)
  	{
  		$this->_y = $y;
  	}

  	public function setZ($z)
  	{
  		$this->_z = $z;
  	}

  	public function setW($w)
  	{
  		$this->_w = $w;
  	}

  	public function setColor(Color $color)
  	{
  		$this->_color = $color;
  	}
}
?>