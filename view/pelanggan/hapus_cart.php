<?php
require('../../database/koneksi.php');

$id = $_GET['id'];
$sql = "delete from keranjang where id='$id'"; 
$hasil = $koneksi->query($sql);

if ($hasil) {
	header('Location: ../../index.php?path=cart');
}
else {
	echo mysqli_error($hasil);
}

