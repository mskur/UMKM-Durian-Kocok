<?php require 'template/adminHeader.php'; ?>

<h1>INI VIEW UPDATE ADMIN</h1>

<form action="<?= base_url('updateAdminAction'); ?>" method="post">
    <label for="username">Username</label>
    <input name="username" id="username" placeholder="username" value="<?= $admin->username; ?>" readonly>
    <?= form_error('username'); ?>
    <br>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="password" value="<?= set_value('password'); ?>">
    <?= form_error('password'); ?>
    <br>

    <input type="hidden" name="passwordOLD" value="<?= $admin->password; ?>">

    <label for="level">Level</label>
    <select name="level" id="level" required>
        <option value="">Pilih Level</option>
        <option value="superadmin" <?= ($admin->level == 'superadmin') ? 'selected' : ''; ?>>Superadmin</option>
        <option value="admin" <?= ($admin->level == 'admin') ? 'selected' : ''; ?>>Admin</option>
    </select>
    <br>

    <button type="submit">Update Admin</button>
</form>
