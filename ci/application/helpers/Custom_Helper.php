<?php  

function get_nama_web()
{
	return "MY FIRST APP";
}

function succ_message($value='')
{
	$str = "Congratulation, " . $value;

	return $str; 
}

function err_message($value='')
{
	$str = "Whoops, " . $value;

	return $str; 
}


?>