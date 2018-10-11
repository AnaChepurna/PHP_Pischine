<?php
class Weapon {
	protected $_name;
	protected $_charge;
	protected $_short_range;
	protected $_middle_range;
	protected $_long_range;
	protected $_effect_zone;

	protected function __construct($name, $charge, $short_range, $middle_range, $long_range, $effect_zone, $speed, $handling, $shield, $weapons)
	{
		$this->_name = $name;
		$this->_charge = $charge;
		$this->_short_range = $short_range;
		$this->_middle_range = $middle_range;
		$this->_long_range = $long_range;
		$this->_effect_zone = $effect_zone;
	}

	public function getCharge()
	{
		return $this->_charge;
	}

	public function getShortRange()
	{
		return $this->_short_range;
	}

	public function getMiddleRange()
	{
		return $this->_middle_range;
	}

	public function getLongRange()
	{
		return $this->_long_range;
	}

	public function getEffectZone()
	{
		return $this->_effect_zone;
	}

	public function getName()
	{
		return $this->_name;
	}

	public function weaponsPP($cost)
	{
		$this->_charge += $cost;
	}

	public static function doc() {
		return (file_get_contents("doc/Weapon.doc.txt"));
	}

	public static function turnNormal()
	{
		$this->_charge = 0;
	}
}
?>