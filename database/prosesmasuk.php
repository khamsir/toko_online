<?php
	session_start();
	require '../database/koneksi.php';
	$username = $_POST['username'];
	$password = sha1($_POST['password']);

	$sql = "SELECT id, username, status FROM akun WHERE username='$username' AND password='$password'";

	$query = mysqli_query($koneksi, $sql);

	if ($query) {
		if ($query->num_rows > 0) {
			
			$data = $query->fetch_array();
			
			//echo 'id: '.$data[0];
			//echo 'username: '.$data[1];	
			//echo 'status: '.$data[2];

			//set session
			$_SESSION['id'] = $data[0];
			$_SESSION['status'] = $data[2];

			//echo '<br> session :'.$_SESSION['id'].' & status : '.$_SESSION['status'];

			//what next
			//echo 'success';
			$url = 'http://'.$_SERVER['SERVER_NAME'].'/toko_online';
			header("Location: ".$url);
		}
		else {
			echo "Akun Belum terdaftar";
		}	

	} else {
		echo mysql_error($koneksi);
	}

?>