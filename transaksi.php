<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<!-- Untuk Header -->
	<div>
		<?php include 'public/header.php'; ?>
	</div>

	<!-- Untuk Isi -->
	<div>
		<h3>Form Bayar</h3>
		<form>
			<table>
				<tr>
					<td>Nama barang</td>
				</tr>
				<tr>
					<td>harga Satuan</td>
				</tr>
				<tr>
					<td>Jumlah</td>
				</tr>
				<tr>
					<td>Total</td>
				</tr>
				<tr>
					<input type="submit" name="btn_bayar" value="Bayar!">
				</tr>
			</table>
		</form>
	</div>

	<!-- Untuk Banner -->
	<div>
		<?php include 'public/footer.php'; ?>
	</div>
</body>
</html>