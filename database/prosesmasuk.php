<?php
	session_start();
	require 'koneksi.php';
	$username = $_POST['username'];
	$password = sha1($_POST['password']);

	$sql = "SELECT id, username, status FROM akun WHERE username='$username' AND password='$password'";

	$query = $koneksi->query($sql);
	$data = $query->fetch_assoc();

	if ($query) {
		if ($query->num_rows > 0) {
			if($data['status'] == "admin"){
				$_SESSION['id'] = $data['id'];
				$_SESSION['status'] = $data['status'];
				header("Location: ../admin/index.php");
				exit();
			} else {
				$_SESSION['id'] = $data['id'];
				$_SESSION['status'] = $data['status'];
				header("Location: ../index.php");
				exit();
			}
		}
		else {
			echo "Akun Belum terdaftar";
		}

	} else {
		echo mysql_error($koneksi);
	}

?>
