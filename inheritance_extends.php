<?php  

class Hewan
{
	private static $kaki = "Kaki hewan";

	public function jalan($hewan = '')
	{
		echo $hewan . " berjalan \n";
	}

	public function makan($hewan='')
	{
		// closure
		$greet = function($a, $b)
		{
		    return ($a + $b);
		};

		$a = 1 + 2;
		
		echo $hewan . " makan " . self::$kaki . $greet(1,2) . " \n";
	}

}

class Bebek extends Hewan
{
	public function terbang()
	{
		echo "Bebek terbang \n";
	}
}

class Itik extends Bebek
{
	
	
}

$bebek = new Bebek();
// $bebek->jalan('Bebek');
$bebek->makan('Bebek');

// $itik = new Itik();
// $itik->terbang();
// $itik->jalan('Itik');

?>