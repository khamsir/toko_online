<?php
require('../../database/koneksi.php');

$id_barang = $_POST['id_barang'];
$id_akun = $_POST['id_akun'];
$jumlah = $_POST['jumlah'];
$total_harga = $_POST['total_harga'];
$status_transaksi = 'belum dikirim';

$sql = "insert into transaksi values('', now(), '$jumlah', '$total_harga', '$status_transaksi', '$id_akun', '$id_barang');"; 
$hasil = $koneksi->query($sql);

$sql2 = "delete from keranjang where id='$id_barang'"; 
$hasil2 = $koneksi->query($sql2);

if ($hasil && $hasil2) {
	header('Location: ../../index.php?path=cart');
}
else {
	echo mysqli_error($hasil);
	echo mysqli_error($hasil2);
}