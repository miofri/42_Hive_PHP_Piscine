<?php
class UnholyFactory{
	private $soldierArray = array();
	public function absorb($soldierType)
	{
		if ($soldierType instanceof Fighter){
			if (in_array($soldierType, $this->soldierArray))
				printf("(Factory already absorbed a fighter of type %s)\n", $soldierType->name);
			else{
				$this->soldierArray[] =  $soldierType;
				printf("(Factory absorbed a fighter of type %s)\n", $soldierType->name);
			}
		}
		else{
			print("(Factory can't absorb this, it's not a fighter)\n");
		}
	}

	public function fabricate($rf)
	{
		foreach($this->soldierArray as $type){
			if ($rf == $type)
			{
				print("(Factory fabricates a fighter of type " . $rf . ")" . PHP_EOL);
				return $type;
			}
		}
		print("(Factory hasn't absorbed any fighter of type " . $rf . ")" . PHP_EOL);
		return NULL;
	}
}
?>
