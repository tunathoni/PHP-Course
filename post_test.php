<?php  

$str = 'NANA IGUANA 24 tahun BANDUNG';

$arr = explode(' ', $str);

$phrase = ['tahun', 'thn'];

echo "<pre>";
print_r ($arr);
echo "</pre>";

$data['nama'] = '';
$data['umur'] = '';
$data['kota'] = '';

$true_nama = 0;
foreach ($arr as $key => $value) {
	if ($true_nama == 0 && !is_numeric($value)) {
		$data['nama'] .= $value . ' ';
	}
	else if (is_numeric($value)) {
		$data['umur'] = $value;
		$true_nama = 1;
	}else if ($true_nama == 1) {
		
		if (!in_array($value, $phrase)) {
			$data['kota'] .= $value . ' ';
		}
		
	}
}

echo "<pre>";
print_r ($data);
echo "</pre>";
?>