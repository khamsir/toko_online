<?php
	require ('../database/koneksi.php');
	
	$code = $_GET['code'];
	$id = $_GET['id'];

	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$kategori = $_POST['kategori'];


	if ($code=='ubah') {
		$sql = "UPDATE barang SET nama='$nama', harga='$harga', stok='$stok', kategori='$kategori' WHERE id='$id'";
		if ($koneksi->query($sql) === TRUE) {
			header('Location: index.php');
			exit();
		} else {
			//echo "Gagal Menghapus!";
			echo mysqli_error($koneksi);
		}
	} else if($code=='pelanggan') {
		$sql = "DELETE FROM akun WHERE id='$id'";
		if ($koneksi->query($sql) === TRUE) {
			header('Location: pelanggan.php');
			exit();
		}
	}
?>