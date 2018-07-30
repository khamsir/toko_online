<?php
	require('../database/koneksi.php');

	$code = $_GET['code'];
	$id = $_GET['id'];

	if ($code=='barang') {
		$sql = "DELETE FROM barang WHERE id='$id'";
		if ($koneksi->query($sql) === TRUE) {
			header('Location: index.php');
			exit();
		} else {
			echo "Gagal Menghapus!";
		}
	} else if($code=='pelanggan') {
		$sql = "DELETE FROM akun WHERE id='$id'";
		if ($koneksi->query($sql) === TRUE) {
			header('Location: pelanggan.php');
			exit();
		}
	}
?>