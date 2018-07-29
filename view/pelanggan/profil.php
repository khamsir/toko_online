<?php
	require("database/koneksi.php");
	$id = $_SESSION['id'];

	$sql = "SELECT * FROM akun WHERE id='$id';";
	$hasil = $koneksi->query($sql);
	$data = $hasil->fetch_assoc();
?>

<!-- Untuk Isi -->
<div class="profile">

	<div class="col-1">
		<div class="ff">
			<div class="top" style="background-image: url(images/pelanggan/<?php echo $data['foto']; ?>)"></div>
			<div class="mid">
				<div class="pad-15px">
					<h3><?php echo $data['nama']; ?></h3>
				</div>
				<div>
					<a href="index.php?path=ubahprofil&id=<?php echo $data['id']; ?>">
						<button class="btn btn-primary-color btn-all">
							Edit Profile
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-2">
		<h3 class="pad-15px">Barang yang sudah dibeli</h3>
		<div>
			<?php include "view/card-item-list.php"; ?>
		</div>
	</div>

</div>
