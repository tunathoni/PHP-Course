<?php  

/**
* 
*/
class Hewan
{

	function __construct()
	{
		// fungsi ini akan secara otomatis dijalankan ketika membuat object dari class
		echo "Ini adalah constructor \n";
	}
	
	function makan($apa = '')
	{
		return " Sedang makan " . $apa;
	}

	function tampil($hewan)
	{
		echo $hewan . $this->makan();		
	}

}

// $hewan = new Hewan('Bebek');

// $hewan->tampil('Bebek');

/**
* 
*/
class Kendaraan 
{
	
	function __construct()
	{
		$this->bensin = 10;
	}

	function jalan()
	{
		$this->bensin--;

		echo "Mobil berjalan, bensin tinggal = " . $this->bensin . "\n";
	}

	function isiBensin()
	{
		$this->bensin+=2;

		echo "Mobil isi bensin tinggal = " . $this->bensin . "\n";
	}
}

$mobil = new Kendaraan();

$mobil->jalan();
$mobil->jalan();
$mobil->jalan();
$mobil->isiBensin();

?>