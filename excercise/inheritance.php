<?php  

include 'pegawai.php';

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
		if ($pertemuan < 0) {
			throw new Exception("Harus lebih dari 0");
		}
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
try {
    $staff->gajiStaff(-1);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

$staff->getGajiStaff();

?>