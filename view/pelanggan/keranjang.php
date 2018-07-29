<?php
    require('database/koneksi.php');
    $id = $_SESSION['id'];
    $sql = "SELECT keranjang.tgl_ditambah,barang.* FROM keranjang JOIN barang ON keranjang.id_barang = barang.id JOIN akun ON keranjang.id_akun = akun.id WHERE akun.id = '$id' ";
    $hasil = $koneksi->query($sql);
?>

<div class="pad-15px" style="width: 600px; margin: auto;">
    <h1 class="pad-bot-15px">Keranjang Anda</h1>
    <div class="">
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
                        <span>Status</span>
                    </button>
                </div>
            </div>
        </div>
        <?php } ?>
    <?php } else { ?>
        <h2>Kerangjang anda kosong</h2>
    <?php } ?>
    </div>
</div>
