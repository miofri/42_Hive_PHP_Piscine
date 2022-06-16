<?php
	class Tyrion extends Lannister{
		public function __construct(){
			Lannister::__construct();
			print("My name is Tyrion\n");
		}
		public function getSize(){
			return "Short";
		}
	}
?>
