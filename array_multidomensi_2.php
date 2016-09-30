<?php  

// $arr = [
// 	'nama' 	=> ['Thoni', 'Andik', 'Wawan'],
// 	'nilai'	=> [10,11,12],
// 	'kelas'	=> ['A', 'B', 'C'],
// 	'keterangan' => 'Ini adalah keterangan'
// ];

// // untuk menampilkan semua array
// // foreach ($arr as $index => $value) {
// // 	echo $value . "\n";
// // }

// // untuk menampilkan semua array 'nilai'
// $no = 1;
// foreach ($arr['nilai'] as $index => $nomer) {
// 	echo $no . ". " . $nomer . "\n";
// 	$no++;
// }

/*

- Jika tidak ada $nilai maka nilai dari $index adalah value dari masing2 array

- Jika ada $nilai maka nilai dari $index adalah nama dari masing2 index itu sendiri.

*/

$arr = [
	'nama' 			=> ['Thoni', 'Andik', 'Wawan'],
	'nun'			=> [30, 28.5, 27],
	'kelas'			=> ['A', 'B', 'C'],
	'keterangan' 	=> 'Semua siswa dinyatakan lolos'
];


echo "Hasil Ujian Nasional SMA NEGERI XXX Malang adalah sebagai berikut :\n";

// pake metode foreach
$no = 1;
foreach ($arr['nama'] as $key => $value) {
	echo $no . '. Nama   : ' . $value . "\n";	
	echo '   Kelas  : ' . $arr['kelas'][$key] . "\n";	
	echo '   Nilai  : ' . $arr['nun'][$key] . "\n";

	$no++;
}

// pake metode for
$no = 1;
$jumlahPerulangan = count($arr['nama']);

for ($i = 0; $i < $jumlahPerulangan; $i++) {
	echo $no . '. Nama   : ' . $arr['nama'][$i] . "\n";	
	echo '   Kelas  : ' . $arr['kelas'][$i] . "\n";	
	echo '   Nilai  : ' . $arr['nun'][$i] . "\n";

	$no++;
}

?>