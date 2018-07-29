<?php
  $code = $_GET['code'];
  $id = $_GET['id'];
  require("../database/koneksi.php");

  if(isset($_POST['tambah'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $inputfoto = $_POST['inputfoto'];

    $sql = "INSERT INTO akun SET nama='$nama', username='$username', password='$password', nama='$nama', no_telp=$no_telp, foto='$inputfoto'";
    if($koneksi->query($sql) === TRUE){
      header('Location: index.php');
      exit();
    }
  }

  $sqlShow = "SELECT * FROM akun WHERE id='$id'; ";
  $hasilShow = $koneksi->query($sqlShow);
  $data = $hasilShow->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> </title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><strong>Data Pelanggan</strong> 
        </div>
        <div class="card-body">
          <form action="formpelanggan.php" method="post">
          <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="Username" class="form-control" required="required" autofocus="autofocus" disabled value="<?php echo $data['username']; ?>">
                <label for="inputEmail">Username</label>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" class="form-control" required="required" autofocus="autofocus" value="<?php echo $data['password']; ?>">
                <label for="inputEmail">Password</label>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="nama" class="form-control" required="required" autofocus="autofocus" value="<?php echo $data['nama']; ?>">
                <label for="inputEmail">Nama</label>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="alamat" class="form-control" required="required" autofocus="autofocus" value="<?php echo $data['alamat']; ?>">
                <label for="inputEmail">Alamat</label>
              </div>
            </div>
            
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="no_telp" class="form-control" required="required" autofocus="autofocus" value="<?php echo $data['no_telp']; ?>">
                <label for="inputEmail">Nomor Telepon</label>
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail">Foto</label>
              <div class="form-label-group">
                <input type="file" id="inputfoto">
              </div>
            </div>

            <a class="btn btn-primary btn-block" name='submit' type="submit">Ubah</a>
          </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
