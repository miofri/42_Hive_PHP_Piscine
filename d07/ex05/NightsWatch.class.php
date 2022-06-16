<?php
class NightsWatch {
	protected $fighter;
	public function recruit($person){
		if ($person instanceof IFighter)
			$this->fighter[] = $person;
	}
	public function fight(){
		foreach($this->fighter as $key=>$value)
			print ($value->fight());
	}
}
?>
