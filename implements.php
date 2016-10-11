<?php  

interface Payment{
	public function kredit();
	public function debit();
	public function getATM();
}

class ATM 
{
	public function inisialAtm(Payment $bank)
	{
		$bank->getATM();		
	}

}

class Mandiri implements Payment
{
	public function __construct()
	{
		$this->kredit = 0;
	}

	public function kredit()
	{
		$this->kredit++;
	}

	public function debit()
	{
		$this->kredit--;
	}

	public function getATM()
	{
		echo "Ini dari bank Mandiri \n";
	}
	
}

class BNI implements Payment
{
	public function __construct()
	{
		$this->kredit = 0;
	}

	public function kredit()
	{
		$this->kredit++;
	}

	public function debit()
	{
		$this->kredit--;
	}

	public function getATM()
	{
		echo "Ini dari bank BNI \n";
	}
	
}

$mandiri = new Mandiri();
$bni = new BNI();

$atm = new ATM();

$atm->inisialAtm($mandiri);
$atm->inisialAtm($bni);

?>