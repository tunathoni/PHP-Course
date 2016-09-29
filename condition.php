<?php  

// If

$val = 8;

if ($val >= 10) {
	echo "bad";
}

// If Else

echo "\n";

if ($val >= 10) {
	echo "Good";
} else {
	echo "Bad";
}

// If Else if

echo "\n";

if ($val == 7) {
	echo $val;
} else if ($val >= 6 && $val <= 10) {
	echo "angka tsb ada disini";
} else {
	echo "Bad";
}


// Switch Case 
echo "\n";
switch ($val) {
	case 1:
		echo $val;
		break;

	case 2:
		echo $val;
		break;

	case 3:
		echo $val;
		break;
	
	default:
		echo "Ini default";
		break;
}

?>