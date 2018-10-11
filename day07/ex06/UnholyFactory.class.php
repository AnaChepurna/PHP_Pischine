<?php

include_once('Fighter.class.php');

class UnholyFactory {
	private $_army = array();

	public function absorb($somebody)
	{
		var_dump($this->_army);
		echo "-------";
		var_dump($somebody);
		if ($somebody instanceof Fighter)
		{
			var_dump($this->_army[$somebody->getType()]);
			if (isset($this->_army[$somebody->getType()]))
			{
				echo "ebala ";
			}
			else
			{
				$this->_army = array_merge($this->_army, array($somebody->getType() => $somebody));
				echo "neebala ";
			}
		}
		else
			echo "idn ";
		echo "/////////////////////////////";
	}
}

?>