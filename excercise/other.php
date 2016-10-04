<?php  

$arr = [1,2,3,4,5,6,7,8,9,10];

$arr_temp = [];
for ($i = 0; $i < count($arr); $i++) {
	shuffle($arr);

	for ($j = 0; $j < 5; $j++) {

		$rand_first 	= rand(0,9);
		$rand_second 	= rand(0,9);

		$new_val = $arr[$rand_first] . '.' . $arr[$rand_second];

		if (!in_array($new_val, $arr_temp)) {
			echo ' ' . $new_val;

		}else{
			
		}
		
		$arr_temp[] = $new_val;
	}

	echo "\n"; 

}

?>