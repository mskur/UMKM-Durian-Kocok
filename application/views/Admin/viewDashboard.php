<?php require 'template/adminHeader.php'; ?>

<h1>INI DASHBOARD</h1>

Jumlah Produk = <?= $countProduct; ?> <br>
<?php foreach($getAllProduct as $product) : ?>
    <?= $product->namaProduct; ?>
    <!-- if discount != 0 -->
    <?php if($product->diskonProduct > 0) : ?>
        <?= $product->hargaProduct - ($product->hargaProduct * $product->diskonProduct / 100); ?>
    <?php else : ?>
        <?= $product->hargaProduct; ?>
    <?php endif; ?>
    <?= $product->diskonProduct; ?>
    <?= $product->deskripsiProduct; ?>
    <?= $product->gambarProduct; ?>
<?php endforeach; ?>
