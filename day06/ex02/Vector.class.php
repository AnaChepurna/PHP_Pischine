<?php

require_once '../ex01/Vertex.class.php';

Class Vector {
	public static $verbose = False;
	private $_x;
	private $_y;
	private $_z;
	private $_w;

	public function __construct($arr)
	{
		if (isset($arr["dest"]) && $arr['dest'] instanceof Vertex)
		{
			$this->_x = $arr['dest']->getX();
			$this->_y = $arr['dest']->getY();
			$this->_z = $arr['dest']->getZ();
			$this->_w = 0;
			if (isset($arr["orig"]) && $arr['orig'] instanceof Vertex)
			{
					$this->_x -= $arr['dest']->getX();
					$this->_y -= $arr['dest']->getY();
					$this->_z -= $arr['dest']->getZ();
			}
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
		$str = 'Vector( x: ' . sprintf("%.2f", $this->_x) .', y: ' . sprintf("%.2f", $this->_y) . ', z: '. sprintf("%.2f", $this->_z) .', w: '. sprintf("%.2f", $this->_w)." )";
		return ($str);
	}

	public static function doc()
   	{
   		$fd = fopen("Vector.doc.txt", 'r');
   		while ($fd && !feof($fd))
   			echo fgets($fd);
   		echo "\n";
  	}

  	public function magnitude()
    {
        return (float)sqrt(($this->_x * $this->_x) + ($this->_y * $this->_y) + ($this->_z * $this->_z));
    }

    public function normalize()
    {
    	if (($len = $this->magnitude()) == 1)
    		return clone $this;
    	$x = $this->_x / $len;
    	$y = $this->_y / $len;
    	$z = $this->_z / $len;
    	return (new Vector(array("x" => $x, "y" = $y, "z" = $z)));
    }

    public function add(Vector $rhs)
}
?>