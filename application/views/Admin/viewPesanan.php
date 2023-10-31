<?php require 'template/adminHeader.php'; ?>

<h1>INI PESANAN ADMIN</h1>

<!-- foreach $getAllPesanan -->
<input type="text" placeholder="Cari Pesanan..." id="cariPesanan">

<table>
    <thead>
        <tr>
            <td>No</td>
            <td>Tanggal Pesanan</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Deskripsi Pesanan</td>
            <td>Whatsapp</td>
            <td>Status</td>
            <td>Aksi</td>
            <td>Admin</td>
        </tr>
    </thead>
    <tbody id="pesanan">
        <?php $i = 1; foreach($getAllPesanan as $pesanan) : ?>
            <tr>
                <td><?= $i; ?></td>
                <?php  $tanggalPesanan = date('j F Y\, H:i', strtotime($pesanan->tanggalPesanan)); ?>
                <td><?= $tanggalPesanan; ?></td>
                <td><?= $pesanan->namaPemesan; ?></td>
                <td><?= $pesanan->alamatPemesan; ?></td>
                <td><?= $pesanan->deskripsiPesanan; ?></td>
                <td><?= $pesanan->noWhatsapp; ?> <a href="https://api.whatsapp.com/send?phone=<?= $pesanan->noWhatsapp; ?>&text=Selamat siang kak <?= $pesanan->namaPemesan;?> apakah benar pesanan kakak <?= $pesanan->deskripsiPesanan; ?>">Hubungi</a></td>
                <?php if($pesanan->statusPesanan === NULL) : ?>
                    <td>Belum Selesai</td>
                <?php else : ?>
                    <td>Selesai</td>
                <?php endif; ?>
                <td>
                <a href="<?= base_url('pesananDURCOK/selesaikanPesanan/'.$pesanan->idPesanan.'/'.$userLogin) ?>">Selesai</a>
                </td>
                <td><?= $pesanan->username; ?></td>
                <?php $i++; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- get Jquery online -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- live search from id cariPesanan on table body pesanan with no, tanggal pesanan, and all -->
<script>
    $(document).ready(function(){
        $("#cariPesanan").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#pesanan tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>