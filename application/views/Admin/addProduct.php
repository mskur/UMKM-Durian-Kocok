<?php require 'template/adminHeader.php'; ?>

    <h1><?= $title; ?></h1>
    <form action="<?= base_url('productDURCOK/addProductDurianKocokAction'); ?>" method="post" enctype="multipart/form-data">
        <label for="namaProduct">Nama Produk</label>
        <input type="text" name="namaProduct" id="namaProduct" placeholder="namaProduct" value="<?= set_value('namaProduct'); ?>" required>
        <?= form_error('namaProduct'); ?>
        <br>

        <label for="hargaProduct">Harga Produk</label>
        <input type="number" name="hargaProduct" id="hargaProduct" placeholder="hargaProduct" value="<?= set_value('hargaProduct'); ?>" required min="0" max="9000000">
        <?= form_error('hargaProduct'); ?>
        <br>

        <label for="gambarProduct">Gambar Produk</label>
        <input type="file" name="gambarProduct" id="gambarProduct" placeholder="gambarProduct" value="<?= set_value('gambarProduct'); ?>">
        <?php if($this->session->flashdata('error')) : ?>
            <p><?= $this->session->flashdata('error'); ?></p>
        <?php endif; ?>
        <br>

        <label for="diskonProduct">Diskon Produk (Opsional)</label>
        <input type="number" name="diskonProduct" id="diskonProduct" placeholder="diskonProduct" value="<?= set_value('diskonProduct'); ?>" min="0" max="100">
        <?= form_error('diskonProduct'); ?>
        <br>

        <label for="deskripsiProduct">Deskripsi Produk</label>
        <textarea name="deskripsiProduct" id="deskripsiProduct" placeholder="deskripsiProduct" required><?= set_value('deskripsiProduct'); ?></textarea>
        <?= form_error('deskripsiProduct'); ?>
        <br>

        <input type="hidden" name="username" value="<?= $userLogin; ?>">

        <button type="submit">Tambah Produk</button>
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