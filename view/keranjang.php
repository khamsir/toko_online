<?php
    session_start();
	require('../database/koneksi.php');
	$tgl = $_GET['tgl'];
	$id_akun = $_SESSION['id'];
	$id_barang = $_GET['id_barang'];

	$sql = "INSERT INTO keranjang SET tgl_ditambah='$tgl', id_akun='$id_akun', id_barang='$id_barang'";
	if($koneksi->query($sql) === TRUE){
		header('Location: ../index.php?path=cart');
		exit();
	}
?>
