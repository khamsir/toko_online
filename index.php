
<?php session_start(); ?>
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
	<link rel="stylesheet" type="text/css" href="public/css/image.css">

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
				
				</div>
			</div>
			<div class="col-3">
				<?php
					// session_start();

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
				if ($path == 'bayar') {
					require_once('view/pelanggan/bayar.php');
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
					DistroIT adalah toko online yang bergerak di bidang fasion, sasaran kami semua kalangan baik muda maupun tua, mulai dari anak - anak dan orang dewasa. Kami hanya menjual pakaian yang dibuat oleh kami sendiri.
				</p>
			</div>
			<div class="col-2">
				<h3>Kontak Kami</h3>
				<p>
					Jalan Sukabumi gang Morris morris No. 2256a-123 rt. 03/rw. 05<br />
			        Telp : 082263741351<br />
					Email : <a href="mailto:deef.erlando@gmail.com">deef.erlando@gmail.com</a>
				</p>
			</div>
		</div>
	</div>


</body>
</html>
