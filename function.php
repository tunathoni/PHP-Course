<?php  

// tanpa nilai balik (return value)
function tampil()
{
	echo "Ini fungsi tambah";
}

// dengan nilai balik (return value)
function tampil2()
{
	return " Ini menggunakan nilai balik";
}

// tampil();
// echo tampil2();

$nilai1 = 10;

// saya ingin mengalikan nilai 10 dengan 2 tapi menggunakan function. 

// kemudian hasil dari perkalian tersebut akan ditampilan di layar menggunakan function juga

function kali($nilai)
{
	$out = $nilai * 2;

	return $out;
}

function tampilkan($hasil_akhir)
{
	echo "Hasil akhir adalah = " . $hasil_akhir;
}

$hasil = kali($nilai1);

echo 'nilai dari function kali = ' . $hasil . '<br>';

tampilkan($hasil);

?>