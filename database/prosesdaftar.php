<?php
	require ("../database/koneksi.php");

	if (!is_numeric($_POST['no_telp'])) {
		die("nomor telepon harus angka");
	} else if (is_numeric($_POST['nama'])) {
		die("nama harus berupa huruf");
	} else {
	$username = $_POST['username'];
	$password = sha1($_POST['password']);
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];
	//uplioad gambar
	$ekstensi_diperbolehkan	= array('png','jpg');
	$namafoto = $_FILES['foto']['name'];
	$x = explode('.', $namafoto);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['foto']['size'];
	$foto_tmp = $_FILES['foto']['tmp_name'];
	$eks = $namafoto;
 	$sql = "INSERT INTO akun(username, password, nama, alamat, no_telp, status, foto) VALUES('$username', '$password', '$nama', '$alamat', '$no_telp', 'pelanggan', '$eks')";
 		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
			//ukuran file kurang dari 1 mb
			if($ukuran < 1044070){			
			move_uploaded_file($foto_tmp, '../images/pelanggan/'.$namafoto);
			$query = mysqli_query($koneksi, $sql);
				if($query){
					die('akun berhasil dibuat, silahkan kembali kemenu utama <a href="../index.php"> kembali </a> ');
				}else{
					die ('gagal membuat akun, silahkan kembali kemenu utama <a href="../index.php"> kembali </a>');
					echo mysqli_error($koneksi);
				}
			}else{
				echo 'UKURAN FILE TERLALU BESAR';
					}
		}else{
			echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
		}
		echo "BERHASIL DAFTAR!";
		$url = 'http://'.$_SERVER['SERVER_NAME'].'/toko_online';
		header("Location: ".$url);



	
	}
	

	




?>