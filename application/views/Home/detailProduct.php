<?php require 'template/homeHeader.php'; ?>

<h1>DETAIL PRODUK <?= $produk->namaProduct; ?></h1>

<table border="1">
    <tr>
        <th>NAMA PRODUCT</th>
        <th>HARGA PRODUCT</th>
        <th>DISKON PRODUCT</th>
        <th>DESKRIPSI PRODUCT</th>
        <th>GAMBAR PRODUCT</th>
    </tr>
    <tr>
        <td><?= $produk->namaProduct; ?></td>
        <td><?= $produk->hargaProduct; ?></td>
        <td><?= $produk->diskonProduct; ?></td>
        <td><?= $produk->deskripsiProduct; ?></td>
        <td><img src="<?= base_url('assets/img/product/'.$produk->gambarProduct); ?>" alt="<?= $produk->gambarProduct; ?>" width="100"></td>
    </tr>