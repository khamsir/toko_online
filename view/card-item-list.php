<?php
    require('database/koneksi.php');
    $id = $_SESSION['id'];
    //$sql = "SELECT keranjang.*, barang.* FROM transaksi, barang WHERE barang.id = transaksi.id_barang WHERE transaksi.id_akun = $id";
    $sql = "
    SELECT
        barang.id as id_barang,
        barang.foto, 
        barang.harga,
        barang.nama,
        transaksi.status_transaksi
    FROM
        transaksi
    JOIN 
        barang
    ON 
        barang.id = transaksi.id_barang
    WHERE 
        transaksi.id_akun = '$id'
    ";

    $hasil = $koneksi->query($sql);
    echo mysqli_error($koneksi);
?>

<?php if($hasil->num_rows > 0){ ?>
        <?php while($data = $hasil->fetch_assoc()) { ?>
        <div class="card-item list">
            <a href="index.php?path=detail&id=<?php echo $i; ?>">
                <div class="top">
                    <div class="image" style="background-image: url('images/barang/<?php echo $data['foto'] ?>');"></div>
                </div>
            </a>
            <div class="mid">
                <div class="col-1">
                    <div class="idr">Rp. <?php echo $data['harga']; ?></div>
                    <div class="ttl"><?php echo $data['nama']; ?></div>
                </div>
                <div class="col-2">
                    <button class="btn btn-buy-color">
                        <span><?php echo $data['status_transaksi']; ?></span>
                        
                    </button>
                </div>
            </div>
        </div>
        <?php } ?>
    <?php } else { ?>
        <h2>Kerangjang anda kosong</h2>
    <?php } ?>
