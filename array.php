<?php  

$arr1 = array(
	1,
	2,
	3,
);

$arr2 = [
	'buku 1',
	'buku 2',
	'buku 3',
	'buku 4',
	'buku 5',
];

// echo count($arr2);

$jmlArr = count($arr2);

for ($i = 0; $i < $jmlArr; $i++ ) {
	echo $arr2[$i] . "\n";
}







?>