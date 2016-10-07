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

$hewan = new Hewan('Bebek');

$hewan->tampil('Bebek');

?>