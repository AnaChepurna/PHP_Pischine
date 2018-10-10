<?php

// require_once '../ex00/Color.class.php';

Class Matrix {
	public static $verbose = False;
	private $_x;
	private $_y;
	private $_z;
	private $_w;
	private $_color;

	public function __construct($arr)
	{
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
}
?>