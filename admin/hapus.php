<?php
	required('../database/koneksi.php');

	$code = $_GET['kode'];
	$id = $_GET['id'];

	if ($code=='barang') {
		$sql = "DELETE barang WHERE id='$id'";
		if ($koneksi->query($sql) === TRUE) {
			header('Location: index.php');
			exit();
		}
	} else {
		$sql = "DELETE akun WHERE id='$id'";
		if ($koneksi->query($sql) === TRUE) {
			header('Location: pelanggan.php');
			exit();
	}
?>