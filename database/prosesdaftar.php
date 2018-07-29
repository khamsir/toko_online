<?php
	require ("../database/koneksi.php");

	$username = $_POST['username'];
	$password = sha1($_POST['password']);
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$no_telp = $_POST['no_telp'];
	//uplioad gambar
	$ekstensi_diperbolehkan	= array('png','jpg');
	$namafoto = $_FILES['foto']['name'];
	$x = explode('.', $namafoto);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['foto']['size'];
	$foto_tmp = $_FILES['foto']['tmp_name'];	
 	$sql = "INSERT INTO akun(username, password, nama, alamat, no_telp, status, foto) VALUES('$username', '$password', '$nama', '$alamat', '$no_telp', 'pelanggan', '$namafoto')";
 		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
			//ukuran file kurang dari 1 mb
			if($ukuran < 1044070){			
			move_uploaded_file($foto_tmp, '../images/pelanggan/'.$namafoto);
			$query = mysqli_query($koneksi, $sql);
				if($query){
					echo 'FILE BERHASIL DI UPLOAD';
				}else{
					//echo 'GAGAL MENGUPLOAD GAMBAR';
					echo mysqli_error($koneksi);
				}
			}else{
				echo 'UKURAN FILE TERLALU BESAR';
					}
		}else{
			echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
		}

		$url = 'http://'.$_SERVER['SERVER_NAME'].'/toko_online';
	header("Location: ".$url);
	




?>