<?php  

class Hewan
{
	public function jalan($hewan = '')
	{
		echo $hewan . " berjalan \n";
	}

	public function makan($hewan='')
	{
		echo $hewan . " makan \n";
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
$bebek->jalan('Bebek');
$bebek->makan('Bebek');

$itik = new Itik();
$itik->terbang();
$itik->jalan('Itik');

?>