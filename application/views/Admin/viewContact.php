<?php require 'template/adminHeader.php'; ?>

<h1>INI CONTACT ADMIN</h1>

<?= $this->session->flashdata('success'); ?>

<form action="contactDURCOK/editContactAction" method="post">
    <label for="alamatWebsite">Alamat Website</label>
    <input type="text" name="alamatWebsite" id="alamatWebsite" placeholder="alamatWebsite" value="<?= $contact->alamatWebsite; ?>" required>
    <?= form_error('alamatWebsite'); ?>
    <br>

    <label for="nomorTelepon">Nomor Telepon</label>
    <input type="text" name="nomorTelepon" id="nomorTelepon" placeholder="nomorTelepon" pattern="[0-9]*" maxlength="15" value="<?= $contact->nomorTelepon; ?>" required>
    <?= form_error('nomorTelepon'); ?>
    <br>

    <label for="alamatLengkap">Alamat Lengkap</label>
    <textarea name="alamatLengkap" id="alamatLengkap" cols="30" rows="10" placeholder="alamatLengkap" required><?= $contact->alamatLengkap; ?></textarea>
    <?= form_error('alamatLengkap'); ?>
    <br>

    <label for="alamatLive">Alamat Live</label>
    <input type="text" name="alamatLive" id="alamatLive" placeholder="alamatLive" value="<?= $contact->alamatLive; ?>" required>
    <?= form_error('alamatLive'); ?>
    <br>

    <button type="submit">Update Kontak</button>
</form>