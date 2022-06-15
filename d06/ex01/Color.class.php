<?php
	Class Color {
		public $red;
		public $green;
		public $blue;
		static $verbose = FALSE;

		public function __construct($arr){
			if (isset($arr['red']) && isset($arr['blue']) && isset($arr['green']))
			{
				$this->red = intval($arr['red']);
				$this->blue = intval($arr['blue']);
				$this->green = intval($arr['green']);
			}
			else if (isset($arr['rgb'])){
				$this->red = intval($arr['rgb']) >> 16 & 255;
				$this->green = intval($arr['rgb']) >> 8 & 255;
				$this->blue = intval($arr['rgb']) & 255;
			}
			if (Self::$verbose){
				printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
			}
		}
		public function __destruct(){
			if (Self::$verbose){
				printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
			}
		}
		public function __toString(){
			return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
		}
		static function doc() {
			if (file_exists("Color.doc.txt")) {
				return file_get_contents("Color.doc.txt");
			}
		}
		public function add(Color $rhs){
			return new Color(array('red' => $this->red + $rhs->red, 'green' => $this->green + $rhs->green, 'blue' => $this->blue + $rhs->blue));
		}
		public function sub(Color $rhs){
			return new Color(array('red' => $this->red - $rhs->red, 'green' => $this->green - $rhs->green, 'blue' => $this->blue - $rhs->blue));
		}
		public function mult($f){
			return new Color(array('red' => $this->red * $f, 'green' => $this->green * $f, 'blue' => $this->blue * $f));
		}
	}
?>
