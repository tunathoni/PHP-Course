<?php  

interface Payment{
	public function kredit();
	public function debit();
	public function getATM();
	public function getSaldo();
}

class ATM 
{
	public function inisialAtm(Payment $bank)
	{
		$bank->getATM();		
	}

	public function cetakSaldo(Payment $bank)
	{
		$bank->getSaldo();
	}

}

class Mandiri implements Payment
{
	public function __construct()
	{
		$this->saldo = 0;
	}

	public function kredit()
	{
		$this->saldo++;
	}

	public function debit()
	{
		$this->saldo--;
	}

	public function getATM()
	{
		echo "Ini dari bank Mandiri \n";
	}

	public function getSaldo()
	{
		echo "Saldo rekening Mandiri Anda : " . $this->saldo . " \n";
	}
	
}

class BNI implements Payment
{
	public function __construct()
	{
		$this->saldo = 0;
	}

	public function kredit()
	{
		$this->saldo++;
	}

	public function debit()
	{
		$this->saldo--;
	}

	public function getATM()
	{
		echo "Ini dari bank BNI \n";
	}

	public function getSaldo()
	{
		echo "Saldo rekening BNI Anda : " . $this->saldo . " \n";
	}
	
}

$mandiri = new Mandiri();
$mandiri->kredit();
$mandiri->kredit();
$mandiri->kredit();
$mandiri->kredit();

$bni = new BNI();
$bni->kredit();
$bni->kredit();
$bni->kredit();
$bni->kredit();
$bni->debit();


$atm = new ATM();

$atm->inisialAtm($mandiri);
$atm->cetakSaldo($mandiri);

$atm->inisialAtm($bni);
$atm->cetakSaldo($bni);

?>