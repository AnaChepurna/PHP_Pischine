<?php

include_once('Fighter.class.php');

class UnholyFactory {
	private $_army = array();

	public function absorb($somebody)
	{
		if ($somebody instanceof Fighter)
		{
			if (isset($this->_army[$somebody->getType()]))
				echo "(Factory already absorbed a fighter of type ".$somebody->getType().")\n";
			else
			{
				$this->_army = array_merge($this->_army, array($somebody->getType() => $somebody));
				echo "(Factory absorbed a fighter of type ".$somebody->getType().")\n";
			}
		}
		else
			echo "(Factory can't absorb this, it's not a fighter)\n";
	}

	public function fabricate($somebody)
	{
		if (isset($this->_army[$somebody]))
		{
			echo "(Factory fabricates a fighter of type ".$somebody.")\n";
			return clone $this->_army[$somebody];
		}
		else
			echo "(Factory hasn't absorbed any fighter of type ".$somebody.")\n";
	}
}

?>