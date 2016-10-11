<?php  

class Pegawai
{
	
	function __construct()
	{
		$this->gajiPokok = 1500000;
	}

}

class Dosen extends Pegawai
{

	public function __construct()
	{
		
		parent::__construct();
		$this->gajiDosen = $this->gajiPokok;
		
	}
	
	public function gajiDosen($sks='')
	{
		$total = ($sks * 15000);

		$this->gajiDosen += $total ;
	}

	public function getGajiDosen()
	{
		echo "Gaji dosen adalah " . $this->gajiDosen . "\n";
	}
	
}

/**
* 
*/
class Staff extends Pegawai
{
	public function __construct()
	{
		parent::__construct();
		$this->gajiStaff = $this->gajiPokok;
	}

	public function gajiStaff($pertemuan='')
	{
		$total = ($pertemuan * 5000);

		$this->gajiStaff += $total ;
	}

	public function getGajiStaff()
	{
		echo "Gaji staff adalah " . $this->gajiStaff . "\n";
	}
	
}


$dosen = new Dosen();
$dosen->gajiDosen(2);
$dosen->getGajiDosen();

$staff = new Staff();
$staff->gajiStaff(2);
$staff->getGajiStaff();

?>