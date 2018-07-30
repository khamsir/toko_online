<?php
require ('../database/koneksi.php');

$id_transaksi = $_POST['id'];
$status = $_POST['status'];

$sql = "UPDATE transaksi set status_transaksi = '$status' where id = '$id_transaksi'";
$rest = $koneksi->query($sql);

if ($rest) {
	header('Location: transaksi.php');
	exit();
} else {
	echo "<script>alert('".mysqli_error($koneksi)."')</script>";
}