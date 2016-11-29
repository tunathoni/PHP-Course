<?php 

$inputan = $_POST['inputan'];

$arr = explode(' ', $inputan);

$phrase = [
	'TAHUN',
	'THN',
	'TH'
];

$data['nama'] = '';
$data['umur'] = '';
$data['kota'] = '';
$count_nama = 0;

foreach ($arr as $key => $value) {

	if ($count_nama == 0 && !is_numeric($value)) {
		$data['nama'] .= $value . ' ';
	}
	if (is_numeric($value)) {
		$data['umur'] = $value;
		$count_nama = 1;
	}
	if ($count_nama == 1 && !is_numeric($value)) {

		if (!in_array($value, $phrase)) {
			$data['kota'] .= $value . ' ';
		}
		
	}

}

echo "<pre>";
print_r ($data);
echo "</pre>";

?>