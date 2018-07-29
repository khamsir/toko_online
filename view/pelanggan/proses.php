<?php
	
	//validasi jika tidak menginput
	if (isset($_POST['btn_daftar'])) {
		# code...
		if ($_POST['username']=='') {
			# code...
			die('username tidak boleh kosong!');
		} elseif ($_POST['password']=='') {
			# code...
			die('password tidak boleh kosong!');
		} elseif ($_POST['nama']=='') {
			# code...
			die('nama tidak boleh kosong!');
		} elseif ($_POST['alamat']=='') {
			# code...
			die('alamat tidak boleh kosong!');
		} elseif ($_POST['email']=='') {
			# code...
			die('email tidak boleh kosong!');
		} elseif ($_POST['no_telp']=='') {
			# code...
			die('nomor telepon tidak boleh kosong!');
		} else {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$nama	  = $_POST['nama'];
			$alamat	  = $_POST['alamat'];
			$email	  = $_POST['email'];
			$no_telp  = $_POST['no_telp'];
		}
			

	}else{
		echo "test saja";;
	}



?>