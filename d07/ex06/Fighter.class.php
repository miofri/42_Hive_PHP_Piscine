<?php
class Fighter{
	public $name;
	public function __construct($input) {
		$this->name = $input;
	}
	public function __toString () {
	if ($this->name) {
		return $this->name;
	}
}
}
?>

