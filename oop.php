<?php  

/**
* 
*/
class Kendi
{	
	function __construct()
	{
		$this->air = 0;
	}
	
	function isiAir($value='')
	{
		return $this->air += $value;
	}

	function lihatIsi()
	{
		echo "Isi air = " . $this->air . "\n";
	}
}

$kendi = new Kendi();

$kendi->isiAir(10);
$kendi->isiAir(1);

$kendi->lihatIsi();

?>