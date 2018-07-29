<?php
    require('database/koneksi.php');
    $sql = "SELECT * FROM barang;";
    $hasil = $koneksi->query($sql);
?>

<div class="place-produk">
    <?php while($data = $hasil->fetch_assoc()) { ?>
    <div class="card-item">
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
                <a class="btn btn-buy-color" href="view/keranjang.php?<?php echo "tgl=".date("Y/m/d")."&id_barang=".$data['id']; ?>">
                    <span>Beli</span>
                </a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
