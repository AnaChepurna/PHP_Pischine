<?php
abstract class Spaceship {

	protected $_name;
	protected $_size;
	protected $_sprite;
	protected $_hp;
	protected $_pp;
	protected $_speed;
	protected $_handling;
	protected $_shield;
	protected $_weapons;

	protected function __construct($name, $size, $sprite, $hp, $pp, $speed, $handling, $shield, $weapons)
	{
		$this->_name = $name;
		$this->_size = $size;
		$this->_sprite = $sprite;
		$this->_hp = $hp;
		$this->_pp = $pp;
		$this->_speed = $speed;
		$this->_handling = $handling;
		$this->_shield = $shield;
		$this->_weapons = $weapons;
	}

	protected function _turnNormal($pp, $speed, $shield)
	{
		$this->_pp = $pp;
		$this->_speed = $speed;
		$this->_shield = $shield;
		foreach ($weapons as $w) {
			$w->_turnNormal();
		}
	}

	public function getSize()
	{
		return $this->_size;
	}

	public function getSprite()
	{
		return $this->_sprite;
	}

	public function getHP()
	{
		return $this->_hp;
	}

	public function getPP()
	{
		return $this->_pp;
	}

	public function getSpeed()
	{
		return $this->_speed;
	}

	public function getName()
	{
		return $this->_name;
	}

	public function getHandling()
	{
		return $this->_handling;
	}

	public function getShield()
	{
		return $this->_shield;
	}

	public function getWeapons()
	{
		return $this->_weapons;
	}

	public function speedPP($cost)
	{
		$this->_pp--;
		$this->_speed += $cost;
	}

	public function shieldPP()
	{
		$this->_pp--;
		$this->_shield++;
	}

	public function weaponsPP($cost, $weapon_name)
	{
		$this->_pp--;
		foreach ($weapons as $w) {
			if ($w->getName() == $w)
				$w->weaponsPP($cost);
		}
	}

	public static function doc() {
		return (file_get_contents("doc/Spaceship.doc.txt"));
	}
}
?>