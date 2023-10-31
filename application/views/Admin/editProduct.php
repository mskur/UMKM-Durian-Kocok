<?php require 'template/adminHeader.php'; ?>

<h1>INI EDIT PRODUCT ADMIN</h1> <br>

<h1><?= $title; ?></h1>
    <form action="<?= base_url('productDURCOK/editProductDurianKocokAction'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="idProduct" value="<?= $product->idProduct; ?>">

        <label for="namaProduct">Nama Produk</label>
        <input type="text" name="namaProduct" id="namaProduct" placeholder="namaProduct" value="<?= $product->namaProduct; ?>" required>
        <?= form_error('namaProduct'); ?>
        <br>

        <label for="hargaProduct">Harga Produk</label>
        <input type="number" name="hargaProduct" id="hargaProduct" placeholder="hargaProduct" value="<?= $product->hargaProduct; ?>" required min="0" max="9000000">
        <?= form_error('hargaProduct'); ?>
        <br>

        <!-- tampilkan gambar yang ada -->
        <!-- jika tidak memiliki gambar tampilkan default.jpg -->
        <?php if($product->gambarProduct == NULL) : ?>
            <img src="<?= base_url('assets/img/product/default.jpg'); ?>" alt="default.jpg" width="200px">
        <?php else : ?>
          <img src="<?= base_url('assets/img/product/') . $product->gambarProduct; ?>" alt="<?= $product->namaProduct; ?>" width="200px">
        <?php endif; ?>
        <br>
        <input type="hidden" name="gambarProductLama" value="<?= $product->gambarProduct; ?>">

        <label for="gambarProduct">Gambar Produk</label>
        <input type="file" name="gambarProduct" id="gambarProduct" placeholder="gambarProduct" value="<?= $product->gambarProduct; ?>">
        <?php if($this->session->flashdata('error')) : ?>
            <p><?= $this->session->flashdata('error'); ?></p>
        <?php endif; ?>
        <br>

        <label for="diskonProduct">Diskon Produk (Opsional)</label>
        <input type="number" name="diskonProduct" id="diskonProduct" placeholder="diskonProduct" value="<?= $product->diskonProduct; ?>" min="0" max="100">
        <?= form_error('diskonProduct'); ?>
        <br>

        <label for="deskripsiProduct">Deskripsi Produk</label>
        <textarea name="deskripsiProduct" id="deskripsiProduct" placeholder="deskripsiProduct" required><?= $product->deskripsiProduct; ?></textarea>
        <?= form_error('deskripsiProduct'); ?>
        <br>

        <button type="submit">Ubah Produk</button>
    </form>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
  $('#deskripsiProduct').summernote({
    disableHtmlSanitizer: true,
    
    placeholder: 'Masukkan deskripsi produk disini...',
    tabsize: 1,
    height: 300,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
</script>