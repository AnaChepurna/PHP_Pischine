<?php

include_once('Greyjoy.class.php');

class Euron extends Greyjoy {
	public function announceMotto() {
		print($this->familyMotto . PHP_EOL);
	}
}

?>
