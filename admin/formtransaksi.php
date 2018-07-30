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
        <div class="card-header"><strong>Data Barang</strong> 
        </div>
        <div class="card-body">
          <form method="post" action="ubahtransaksi.php">
            <div >
              <div>
                
                <input type="hidden" name="id" id="inputEmail" class="form-control" required="required" autofocus="autofocus" value="<?php echo $_GET['id']; ?>">
              </div>
            </div>

                       

          <div class="form-group">
              <label for="inputEmail">Status</label>
              <div class="form-label-group">
                <select name="status">
                  <option value="belum dikirim">Belum Dikirim</option>
                  <option value="sudah dikirim">Sudah Dikirim</option>
                </select>
              </div>
            </div>

            <button class="btn btn-primary btn-block" type="submit">
              Ubah
            </button>
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
