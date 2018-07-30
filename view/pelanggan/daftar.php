<div class="frame-sign">
	<div class="fs-place">
		<div class="nav">
			<button class="btn btn-main2-color" onclick="openSignUp('hide')">
				<span class="fa fa-lg fa-times"></span>
			</button>
		</div>
		<div class="top">
			<img src="images/icon/logo2.png">
		</div>
		<div class="mid">
			<form method="post" action="database/prosesdaftar.php" enctype="multipart/form-data">
			<form>
				<div class="block">
					<input class="txt txt-primary-color" type="text" name="username" placeholder="Username">
				</div>
						
				<div class="block">
					<input class="txt txt-primary-color" type="password" name="password" placeholder="Password">
				</div>
						
				<div class="block">
					<input class="txt txt-primary-color" type="text" name="nama" placeholder="Nama Lengkap">
				</div>
						
				<div class="block">
					<input class="txt txt-primary-color" type="text" name="alamat" placeholder="Alamat">
				</div>
						
				<div class="block">
					<input class="txt txt-primary-color" type="text" name="no_telp" placeholder="Nomor Telepon">
				</div>

				<div class="block">
					<input type="file" name="foto">
				</div>

				<div class="block" style="text-align: right;">
					<input type="submit" name="submit" class="btn btn-main-color" value="Daftar">
				</div>
						
			</form>
		</div>
	</div>
</div>
