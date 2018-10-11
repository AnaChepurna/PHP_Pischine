<?php
class NightsWatch implements IFighter {

	private $_nw = array();

	public function recruit($somebody)
	{
		array_push($this->_nw, $somebody);
	}

	public function fight(){
		foreach ($this->_nw as $somebody) {
			if ($somebody instanceof IFighter)
				$somebody->fight();
		}
	}
}
?>