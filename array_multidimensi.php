<?php  

// versi lama
$arr = array(

	array(
		'A1','B1','C1'
	),

	array(
		'A2','B2','C2'
	),

	array(
		'A3','B3','C3'
	),
);

// versi baru
$keluarga = [
	['A1','B1','C1'],
	['A2','B2','C2','D2'],
	['A3','B3','C3','D3','E3'],
];

// tampil A1

// echo $arr[0][0];

// menampilkan array menggunakan perulangan

$jmlAnak = count($keluarga);

for($i = 0; $i < $jmlAnak; $i++)
{
	$jmlPermen = count($keluarga[$i]);

	echo "Anak Ke " . $i . "\n";

	for ($j = 0; $j < $jmlPermen; $j++)
	{
		echo "punya Permen = " . $keluarga[$i][$j] . "\n";
	}

	echo "\n";
	// echo "Parent = " . $i . ", Child = " . $jmlArrChild . "\n";
}

?>