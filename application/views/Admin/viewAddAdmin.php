<?php require 'template/adminHeader.php'; ?>

<h1>INI VIEW ADD ADMIN</h1>

<form action="<?= base_url('addAdminAction'); ?>" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="username" value="<?= set_value('username'); ?>" required>
    <?= form_error('username'); ?>
    <br>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="password" value="<?= set_value('password'); ?>" required>
    <?= form_error('password'); ?>
    <br>

    <label for="level">Level</label>
    <select name="level" id="level" required>
        <option value="">Pilih Level</option>
        <option value="superadmin">Superadmin</option>
        <option value="admin">Admin</option>
    </select>
    <br>

    <button type="submit">Add Admin</button>
</form>