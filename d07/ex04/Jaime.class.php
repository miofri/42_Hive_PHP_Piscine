<?php
class Jaime extends Lannister{
	public function sleepWith($person)
	{
		if ($person instanceof Lannister && $person !== "Tyrion")
			print("With pleasure, but only in a tower in Winterfell, then.\n");
		else if ($person instanceof Stark)
			print("Let's do this.\n");
		else
			print("Not even if I'm drunk !\n");
	}
}
?>
