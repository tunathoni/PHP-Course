<?php  


$val = 'Hello World';

echo strtoupper($val); // Membuat huruf menjadi besar

echo "\n";

echo strtolower($val);

$val2 = 'hello world';

echo "\n";

echo ucfirst($val2); // untuk membesarkan huruf pertama

echo "\n";

echo lcfirst($val); // untuk mengecilkan huruf pertama


$val3 = 'abcdefghi';

echo "\n";
echo substr($val3, -1);

echo "\n";
echo substr($val3, -2);
?>