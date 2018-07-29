<?php
  $code = $_GET['code'];
  $id = $_GET['id'];
  require("../database/koneksi.php");

  if(isset($_POST['tambah'])){
    $namabarang = $_POST['namabarang'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
    $kategori = $_POST['kategori'];
    $inputfoto = $_POST['inputfoto'];

    $sql = "INSERT INTO barang SET nama='$namabarang', harga='$harga', stok='$stock', kategori='$kategori', foto='$inputfoto'";
    if($koneksi->query($sql) === TRUE){
      header('Location: index.php');
      exit();
    }
  }

  $sqlShow = "SELECT * FROM barang WHERE id='$id'; ";
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

    <title>Admin DistroIT</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">
    <?php if($code == "tambah") { ?>
      <div class="container">
        <div class="card card-login mx-auto mt-5">
          <div class="card-header"><strong>Data Barang</strong>
          </div>
          <div class="card-body">
            <form action="formbarang.php" method="post">
            <div class="form-group">
                <div class="form-label-group">
                  <input type="text" id="inputEmail" name="namabarang" class="form-control" required="required" autofocus="autofocus">
                  <label for="inputEmail">Nama Barang</label>
                </div>
              </div>

              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" id="inputEmail" name="harga" class="form-control" required="required" autofocus="autofocus">
                  <label for="inputEmail">Harga</label>
                </div>
              </div>

              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" id="inputEmail" name="stock" class="form-control" required="required" autofocus="autofocus">
                  <label for="inputEmail">Stok</label>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail">Kategori</label>
                <div class="form-label-group">
                  <select name="kategori">
                    <option value="kaos">Kaos</option>
                    <option value="long sleeve">Long Sleeve</option>
                    <option value="kemeja">Kemeja</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail">Foto</label>
                <div class="form-label-group">
                  <input type="file" id="inputfoto" name="inputfoto">
                </div>
              </div>

              <button type="submit" class="btn btn-primary btn-block" name="tambah" >Tambah</button>
            </form>
            </div>
          </div>
        </div>
      <?php } else if($code == "ubah") { ?>
              <div class="container">
        <div class="card card-login mx-auto mt-5">
          <div class="card-header"><strong>Data Barang</strong>
          </div>
          <div class="card-body">
            <form>
            <div class="form-group">
                <div class="form-label-group">
                  <input type="text" id="inputEmail" class="form-control" required="required" autofocus="autofocus" value="<?php echo $data['nama']; ?>">
                  <label for="inputEmail">Nama Barang</label>
                </div>
              </div>

              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" id="inputEmail" class="form-control" required="required" autofocus="autofocus" value="<?php echo $data['harga']; ?>">
                  <label for="inputEmail">Harga</label>
                </div>
              </div>

              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" id="inputEmail" class="form-control" required="required" autofocus="autofocus" value="<?php echo $data['stok']; ?>">
                  <label for="inputEmail">Stok</label>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail">Kategori</label>
                <div class="form-label-group">
                  <?php if($data['kategori'] == 'kaos'){ ?>
                    <select name="kategori">
                      <option value="kaos" selected>Kaos</option>
                      <option value="long sleeve">Long Sleeve</option>
                      <option value="kemeja">Kemeja</option>
                    </select>
                  <?php } else if($data['kategori'] == 'long sleeve') { ?>
                    <select name="kategori">
                      <option value="kaos">Kaos</option>
                      <option value="long sleeve" selected>Long Sleeve</option>
                      <option value="kemeja">Kemeja</option>
                    </select>
                  <?php } else if($data['kategori'] == 'kemeja') { ?>
                    <select name="kategori">
                      <option value="kaos">Kaos</option>
                      <option value="long sleeve">Long Sleeve</option>
                      <option value="kemeja" selected>Kemeja</option>
                    </select>
                  <?php } ?>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail">Foto</label>
                <div class="form-label-group">
                  <input type="file" id="inputfoto">
                </div>
              </div>

              <a class="btn btn-primary btn-block" href="index.php">Ubah</a>
            </form>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
