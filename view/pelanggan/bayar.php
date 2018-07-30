<?php
require('database/koneksi.php');

$iduser = $_SESSION['id'];
$id = $_GET['id'];

?>
<script type="text/javascript">
	$(document).ready(function() {

		$('#jumlah').keyup(function(event) {
			var harga = $('#harga').val();
			var jumlah = $('#jumlah').val();
			var biaya = harga * jumlah;
			$('#biaya').html(biaya);
			$('#biaya2').val(biaya);
		});
	});
</script>
<div class="detail-produk">
	<div class="col-1">
		<?php
			$sql = "SELECT * FROM barang WHERE id='$id'; ";

			$hasil = $koneksi->query($sql);
			$data = $hasil->fetch_assoc();
		?>
		<h1 class="pad-bot-20px">Detail Barang</h1>
		<div class="top pad-bot-20px">
			<div class="image image-150px" style="background-image: url('images/barang/<?php echo $data['foto'] ?>')"></div>
		</div>
		<div class="bot">
			<h3 class="idr">Harga : IDR <?php echo $data['harga']; ?></h3>
		</div>
		<div class="bot">
			<h3 class="idr">Stock : <span id="harga-barang"><?php echo $data['stok']; ?></span> Barang</h3>
		</div>

		<div class="pad-20px"></div>

		<?php
			$sql2 = "SELECT * FROM akun WHERE id='$iduser';";

			$hasil = $koneksi->query($sql2);
			$data2 = $hasil->fetch_assoc();
		?>

		<h1 class="pad-bot-20px">Detail Pembeli</h1>
		<div class="top pad-bot-20px">
			<div class="image image-150px" style="background-image: url('images/pelanggan/<?php echo $data2['foto']; ?>')"></div>
		</div>
		<div class="bot">
			<h3 class="idr">Nama : <?php echo $data2['nama']; ?></h3>
		</div>
		<div class="bot">
			<h3 class="idr">Username : <?php echo $data2['username']; ?></h3>
		</div>
		<div class="bot">
			<h3 class="idr">No. Telpon : <?php echo $data2['no_telp']; ?></h3>
		</div>
		<div class="bot">
			<h3 class="idr">Alamat : <?php echo $data2['alamat']; ?></h3>
		</div>
		<div class="bot">
			<h3 class="idr">Status : <?php echo $data2['status']; ?></h3>
		</div>
	</div>
	<div class="col-2">
	<form method="post" action="view/pelanggan/tambah_bayar.php">
		<div class="bot">
			<h1>Biaya : IDR <span id="biaya">00</span></h1>
		</div>
		<div class="bot">
			Jumlah
			<input type="hidden" name="harga" id="harga" value="<?php echo $data['harga']; ?>">
			<input type="hidden" name="id_barang" value="<?php echo $id; ?>">
			<input type="hidden" name="id_akun" value="<?php echo $iduser; ?>">
			<input type="hidden" name="total_harga" id="biaya2" value="">
			<input type="text" name="jumlah" placeholder="0" class="txt txt-main-color txt-border" id="jumlah">
		</div>
		<div class="pad-bot-10px"></div>
		<div class="bot">
			<button class="btn btn-buy-color btn-all">
				<span>Bayar Sekarang</span>
			</button>
		</div>
	</form>
	</div>
</div>