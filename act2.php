<?php  

$param 	= $_POST;
$temp 	= 0;

$jml 	= count($param['nilai']);

for ($i = 0; $i < $jml; $i++) {
	$temp += $param['nilai'][$i];
}

$rata2 = $temp / $jml;


echo $rata2;

$total_rata = array_sum($param['nilai']) / $jml;

echo $total_rata;


$arr = [
	'tst' => 'randy',
	'wow' => 'dika',
	'tik' => 'randy'
];

$arr_temp1 = [];
$arr_temp2 = [];

foreach ($arr as $key => $value) {

	if (!in_array($value, $arr_temp1)) {
		$arr_temp1[] = $value;
	} 
	
}

foreach ($arr as $key => $value) {
	
	for ($i = 0 ; $i < count($arr_temp1); $i++) {
		if ($value == @$arr_temp1[$i]) {

			if (empty($arr_temp2)) {
				$arr_temp2[$arr_temp1[$i]] = $key;
			} else {
				array_push($arr_temp2[$arr_temp1[$i]], $key);
			}
			
		} else {
			$arr_temp2[$arr_temp1[$i]] = $key;
		}
		
	}
	
}

echo "<pre>";
print_r ($arr_temp1);
print_r ($arr_temp2);
echo "</pre>";
?>