<?php
class Dice {
	private static $_dice;

	private function __construct() {}

	public static function getDice() {
		if (!self::$_dice)
			self::$_dice = new Dice();
		return self::$_dice;
	}

	public function getRandValue() {
		return rand (1, 6);
	}

	public static function doc() {
		return (file_get_contents("doc/Dice.doc.txt"));
	}
}
?>