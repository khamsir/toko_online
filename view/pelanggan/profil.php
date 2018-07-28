<!-- Untuk Isi -->
<div class="profile">
	<div class="col-1">
		<div class="ff">
			<div class="top" style="background-image: url(images/icon/sponbop.jpg)"></div>
			<div class="mid">
				<div class="pad-15px">
					<h3>Name</h3>
				</div>
				<div class="pad-bot-15px">
					<p>Email</p>
				</div>
				<div>
					<a href="index.php?path=ubahprofil">
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
			<?php for ($i=0; $i < 8; $i++) {
				include "view/card-item-list.php";
			} ?>
		</div>
	</div>

</div>