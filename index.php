<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="public/css/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/assets.css">
	<link rel="stylesheet" type="text/css" href="public/css/header.css">
	<link rel="stylesheet" type="text/css" href="public/css/body.css">
	<link rel="stylesheet" type="text/css" href="public/css/footer.css">
	<link rel="stylesheet" type="text/css" href="public/css/card.css">
	<link rel="stylesheet" type="text/css" href="public/css/form.css">

	<script type="text/javascript" src="public/js/jquery.js"></script>
	<script type="text/javascript">
		function openSignIn(stt) {
			if (stt == 'open') {
				$('#popup-sigin-in').show();
			} else {
				$('#popup-sigin-in').hide();
			}
		}
		function openSignUp(stt) {
			if (stt == 'open') {
				$('#popup-sigin-up').show();
			} else {
				$('#popup-sigin-up').hide();
			}
		}
		$(document).ready(function() {

		});
	</script>
</head>
<body>


	<!-- Untuk Admin -->
	<!-- Untuk Header -->
	<div class="header">
		<div class="hd-content">
			<div class="col-1">
				<a href="index.php">
					<img src="images/icon/logo2.png" class="logo">
				</a>
			</div>
			<div class="col-2">
				<div class="search">
					<form method="get" action="index.php">
						<input type="hidden" name="path" value="search">
						<input type="text" name="keyword" placeholder="Aku ingin cari..." required="true" class="src txt txt-main-color">
						<select name="berdasarkan" class="ctr select">
							<option value="id">Id</option>
							<option value="nama">Nama</option>
							<option value="kategori">Kategori</option>
							<option value="harga">Harga</option>
						</select>
						<button class="btn btn-main-color">
							<div class="fa fa-lg fa-search"></div>
						</button>
					</form>
				</div>
			</div>
			<div class="col-3">
				<?php
					session_start();

					if (isset($_SESSION['id'])) {
						?>
						<!--Ketika user syudah login-->
						<a href="index.php?path=cart">
							<button class="btn btn-main-color btn-circle">
								<span class="fa fa-lg fa-shopping-cart"></span>
							</button>
						</a>
						<a href="index.php?path=profile">
							<button class="btn btn-primary-color btn-circle" style="margin-left: 10px;">
								<span class="fa fa-lg fa-user"></span>
							</button>
						</a>
						<a href="database/proseslogout.php">
							<button class="btn btn-primary-color btn-circle" style="margin-left: 10px;">
								<span class="fa fa-lg fa-power-off"></span>
							</button>
						</a>
				<?php
					} else {
						?>
						<!--Ketika user belum login-->
						<button class="btn btn-primary-color" onclick="openSignIn('open')">
							Masuk
						</button>
						<button class="btn btn-main-color" style="margin-left: 10px;" onclick="openSignUp('open')">
							Daftar
						</button>
				<?php
					}

				?>
				<!-- test
				Ketika user belum login
				<button class="btn btn-primary-color" onclick="openSignIn('open')">
					Masuk
				</button>
				<button class="btn btn-main-color" style="margin-left: 10px;" onclick="openSignUp('open')">
					Daftar
				</button>


				<!--Ketika user syudah login
				<a href="index.php?path=cart">
					<button class="btn btn-main-color btn-circle">
						<span class="fa fa-lg fa-shopping-cart"></span>
					</button>
				</a>
				<a href="index.php?path=profile">
					<button class="btn btn-primary-color btn-circle" style="margin-left: 10px;">
						<span class="fa fa-lg fa-user"></span>
					</button>
				</a>
				<a href="#">
					<button class="btn btn-primary-color btn-circle" style="margin-left: 10px;">
						<span class="fa fa-lg fa-power-off"></span>
					</button>
				</a>
				-->

			</div>
		</div>
	</div>

	<div class="popup" id="popup-sigin-in">
		<?php include 'view/pelanggan/masuk.php'; ?>
	</div>

	<div class="popup" id="popup-sigin-up">
		<?php include 'view/pelanggan/daftar.php'; ?>
	</div>

	<!-- Untuk Isi -->
	<div class="body">
		<?php
			if (isset($_GET['path'])) {
				$path = $_GET['path'];
				if ($path == 'home') {
					require_once('view/pelanggan/home.php');
				}
				if ($path == 'search') {
					require_once('view/pelanggan/hasilpencarian.php');
				}
				if ($path == 'detail') {
					require_once('view/pelanggan/detailproduk.php');
				}
				if ($path == 'cart') {
					require_once('view/pelanggan/keranjang.php');
				}
				if ($path == 'transaksi') {
					require_once('view/pelanggan/transaksi.php');
				}
				if ($path == 'profile') {
					require_once('view/pelanggan/profil.php');
				}
				if ($path == 'ubahprofil') {
					require_once('view/pelanggan/ubahprofil.php');
				}
			} else {
				require_once('view/pelanggan/home.php');
			}
		?>
	</div>

	<!-- Untuk footer -->

	<!-- Untuk Banner -->

	<div class="footer">

		<!-- start: Photo Stream -->
		<div class="ft-place">
			<div class="col-1">
				<h3>Tentang DistroIT</h3>
				<p>
					DistroIT adalah toko online yang bergerak di bidang fasion, sasaran kami semua kalangan baik muda maupun tua, mulai dari anak - anak dan orang dewasa.
				</p>
			</div>
			<div class="col-2">
				<h3>Alamat Kami</h3>
				<p>
					Kp. Wangkal Rt.03 Rw.07 Desa Kalijaya Kecamatan Cikarang Utara Kabupaten Bekasi 17530<br />
			        Telp : 085694984803<br />
					Email : <a href="mailto:hakko_bio_richard@yahoo.co.id">hakko_bio_richard@yahoo.co.id</a> / <a href="mailto:hakkobiorichard@gmail.com">hakkobiorichard@gmail.com</a>
				</p>
			</div>
		</div>
	</div>


</body>
</html>
