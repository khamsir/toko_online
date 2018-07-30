<?php
	require('database/koneksi.php');
    $id = $_SESSION['id'];
    $sqlShow = "SELECT * FROM akun WHERE id='$id'; ";
    $hasilShow = $koneksi->query($sqlShow);
    $data = $hasilShow->fetch_assoc();

    $username = $data['username'];
    $password = $data['password'];
    $ulangiPassword = $data['password'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $notelp = $data['no_telp'];
?>

<!-- Untuk Isi -->
<div style="width: 800px; margin: auto;">
	<div class="pad-bot-15px"></div>
	<h1>Ubah Profile</h1>
	<div class="profile">

		<div class="col-1">
			<div class="ff">
				<div class="top" style="background-image: url(images/pelanggan/<?php echo $data['foto']; ?>"></div>
				<div class="mid">
					<div class="pad-bot-15px"></div>
					<div>
						<input type="file" name="foto" id="foto" style="display: none;">

						<label for="foto">
							<div class="btn btn-primary-color btn-all btn-div">
								Ubah Foto
							</div>
						</label>
					</div>
				</div>
			</div>
		</div>

		<div>
			<div class="mid">
				<form action="view/pelanggan/ubah.php" method="post">
					<div class="block">
						<input class="txt txt-primary-color" type="text" name="username" value="<?php echo $username; ?>">
					</div>

					<div class="block">
						<input class="txt txt-primary-color" type="password" name="password">
					</div>

					<div class="block">
						<input class="txt txt-primary-color" type="text" name="nama" value="<?php echo $nama; ?>">
					</div>

					<div class="block">
						<input class="txt txt-primary-color" type="text" name="alamat" value="<?php echo $alamat; ?>">
					</div>

					<div class="block">
						<input class="txt txt-primary-color" type="text" name="no_telp" value="<?php echo $notelp; ?>">
					</div>
					<div class="block" style="text-align: right;">
						<input type="submit" name="submit" class="btn btn-main-color" value="Ubah">
					</div>

				</form>
			</div>
		</div>

	</div>
</div>
