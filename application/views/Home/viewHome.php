<?php require 'template/homeHeader.php' ?>

<h1>INI HOME</h1>

Jumlah Produk = <?= $countProduct; ?> <br>

    <table border="1">
        <tr>
            <th>NO</th>
            <th>NAMA PRODUCT</th>
            <th>HARGA PRODUCT</th>
            <th>DISKON PRODUCT</th>
            <th>DESKRIPSI PRODUCT</th>
            <th>GAMBAR PRODUCT</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach($getAllProduct as $product): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $product->namaProduct; ?></td>

            <!-- if product memiliki diskon > 0 || diskon != null -->
            <?php if($product->diskonProduct > 0): ?>
            <td>
                <strike><?= $product->hargaProduct; ?></strike>
                <?= $product->hargaProduct - ($product->hargaProduct * $product->diskonProduct / 100); ?>
            </td>
            <?php else: ?>
                <td><?= $product->hargaProduct; ?></td>
            <?php endif; ?>

            <td><?= $product->diskonProduct; ?>%</td>
            <td><?= $product->deskripsiProduct; ?></td>
            <td><img src="<?= base_url('assets/img/product/'.$product->gambarProduct); ?>" alt="<?= $product->gambarProduct; ?>" width="100"></td>
        </tr>
        <?php endforeach; ?>
    </table>