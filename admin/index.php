<?php
  session_start();
  require('../database/koneksi.php');
    if($_SESSION['status'] != "admin"){
      header('Location: ../index.php');
      exit();
    }

  $sql = "SELECT * FROM barang;";
  $hasil = $koneksi->query($sql);

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

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <div id="wrapper"> 

      <!-- Sidebar -->
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <span>Barang</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaksi.php">
            <span>Transaksi</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pelanggan.php">
            <span>Pelanggan</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../database/proseslogout.php">
            <span>Keluar</span></a>
        </li>
      </ul>


      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Barang</div>


                <!-- tombol CRUD -->
                  <div class="input-group">
                    <div class="input-group-append">
                      <a class="btn btn-primary" type="button" href="formbarang.php?code=tambah">
                        Tambah
                      </a>
                    </div>
                  </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Nama</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Kategori</th>
                      <th>Foto</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php while($data = $hasil->fetch_assoc()){ ?>
                    <tr>
                      <td><?php echo $data['id']; ?></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['harga']; ?></td>
                      <td><?php echo $data['stok']; ?></td>
                      <td><?php echo $data['kategori']; ?></td>
                      <td><img src="../images/barang/<?php echo $data['foto']; ?>" alt=""></td>
                      <td>
                      <a class="btn btn-primary" type="button" href="formbarang.php?code=ubah&id=<?php echo $data['id']; ?>">
                        Ubah
                      </a>
                      <a class="btn btn-primary" type="button" href="hapus.php?code=barang&id=<?php echo $data['id']; ?>">
                        Hapus
                      </a>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Ikmal Andarus 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>
