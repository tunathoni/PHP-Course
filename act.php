<?php 

$post_value = $_POST['nama'];

if ($post_value < 10) {
	$input = $post_value + 10;
} else {
	$input = $post_value;
}

echo $input;
?>