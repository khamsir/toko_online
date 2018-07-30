<?php
	require('database/koneksi.php');
	$id = $_GET['id'];
	$sql = "SELECT * FROM barang WHERE id='$id'; ";
	$hasil = $koneksi->query($sql);
	$data = $hasil->fetch_assoc();
?>

<div class="detail-produk">
	<div class="col-1">
		<div class="top">
			<img src="images/barang/<?php echo $data['foto'] ?>" style="width: 100%;">
		</div>
	</div>

	<div class="col-2">
		<div class="bot">
			<h1 class="idr">IDR <?php echo $data['harga']; ?></h1>
		</div>
		<div class="bot">
			<h1 class="idr">Stock <?php echo $data['stok']; ?></h1>
		</div>
		<div class="bot">
			<a href="view/keranjang.php?<?php echo "tgl=".date("Y/m/d")."&id_barang=".$data['id']; ?>">
				<button class="btn btn-buy-color btn-all">
					Beli Sekarang
				</button>
			</a>
		</div>
		<div class="bot">
			<a href="view/keranjang.php?<?php echo "tgl=".date("Y/m/d")."&id_barang=".$data['id']; ?>">
				<button class="btn btn-primary-color btn-all"> 
					Tambah ke Keranjang
				</button>
			</a>
		</div>
	</div>

</div>
