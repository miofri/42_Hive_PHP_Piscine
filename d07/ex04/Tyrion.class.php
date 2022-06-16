<?php
	class Tyrion {
		public function sleepWith($person)	{
		if ($person instanceof Lannister && $person !== "Jaime")
			print("Not even if I'm drunk !\n");
		else if ($person instanceof Stark)
			print("Let's do this.\n");
		else
			print("Not even if I'm drunk !\n");
	}
}
?>
