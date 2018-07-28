<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<img src="images/icon/logo2.png" style="width: 170px;height: 70px;">
	</div>
	<div>
		<form>
			<input type="text" name="keyword">
			<select name="berdasarkan">
				<option value="id">Id</option>
				<option value="nama">Nama</option>
				<option value="kategori">Kategori</option>
				<option value="harga">Harga</option>
			</select>
			<input type="submit" name="btn_cari" value="Cari">
		</form>
	</div>
	<div>
		<!--Ketika user belum login-->
		<a href="masuk.php">
			<button>Masuk</button>
		</a>
		<a href="daftar.php">
			<button>Daftar</button>
		</a>

		<!--Ketika user syudah login-->
		<a href="keranjang.php">
			<button>Keranjang</button>
		</a>
		<a href="profil.php">
			<button>Profil</button>
		</a>
		<a href="#">
			<button>Keluar</button>
		</a>
	</div>
</body>
</html>