<?php require 'template/adminHeader.php'; ?>

<h1>INI PRODUCT ADMIN</h1> <br>

<a href="<?= base_url('addProduct'); ?>"><h3>ADD</h3></a>

<!-- Tampilkan error message -->
<p><?= $this->session->flashdata('error'); ?></p>

<!-- Tampilkan success message -->
<p><?= $this->session->flashdata('success'); ?></p>

<!-- if product 0 -->
<?php if(count($allProduct) == 0): ?>
    <p>Belum ada product</p>
<?php else : ?>

    <input type="text" placeholder="Cari Produk..." id="cariProduk">

    <table border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA PRODUCT</th>
                <th>HARGA PRODUCT</th>
                <th>DISKON PRODUCT</th>
                <th>DESKRIPSI PRODUCT</th>
                <th>GAMBAR PRODUCT</th>
                <th>AKSI</th>
                <th>Admin</th>
            </tr>
        </thead>
        
        <?php $no = 1; ?>

        <tbody id="produk">
            <?php foreach($allProduct as $product): ?>
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
                <td>
                    <?php if($product->gambarProduct == NULL) : ?>
                        <img src="<?= base_url('assets/img/product/default.jpg'); ?>" alt="default.jpg" width="100">
                    <?php else : ?>
                        <img src="<?= base_url('assets/img/product/'.$product->gambarProduct); ?>" alt="<?= $product->gambarProduct; ?>" width="100">
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?= base_url('editProduct/'.$product->idProduct); ?>">EDIT</a>
                    <a href="<?= base_url('deleteProduct/'.$product->idProduct); ?>">DELETE</a>
                </td>
                <td><?= $product->username; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php endif; ?>

<!-- get Jquery online -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- live search-->
<script>
    $(document).ready(function(){
        $("#cariProduk").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#produk tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>