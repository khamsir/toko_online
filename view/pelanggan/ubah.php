<?php
    require('../../database/koneksi.php');
    session_start();
    $id = $_SESSION['id'];

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $ulangiPassword = $_POST['password'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $notelp = $_POST['no_telp'];

        $sql = "UPDATE akun SET username='$username', password='$password', nama='$nama', alamat='$alamat', no_telp='$notelp' WHERE id='$id';" ;
        if($koneksi->query($sql) === TRUE){
            header('Location: ../../index.php?path=ubahprofil');
            exit();
        } else {
            echo "gagal";
        }
    }
?>
