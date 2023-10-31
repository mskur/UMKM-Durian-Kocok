<?php require 'template/adminHeader.php'; ?>

<h1>INI VIEW ADMIN</h1>

<!-- add admin -->
<a href="<?= base_url('addAdmin'); ?>">Add Admin</a>

<!-- pesan -->
    <p><?= $this->session->flashdata('pesan'); ?></p>

<table border="1">
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Level</th>
        <th>Action</th>
    </tr>
    <?php foreach($allAdmin as $admin) : ?>
    <tr>
        <td><?= $admin->username; ?></td>
        <td> *** </td>
        <td><?= $admin->level; ?></td>
        <!-- superadmin tidak boleh menghapus dirinya sendiri dan tidak boleh menghapus superadmin lainnya -->
        <?php if($admin->level == 'superadmin' || $userLogin == $admin->username) : ?>
            <td>
                Gaboleh Hapus
            </td>
        <?php else :?>
            <td>
                <a href="<?= base_url('updateAdmin/'.$admin->username); ?>">Update</a>
                <a href="<?= base_url('deleteAdmin/'.$admin->username); ?>">Delete</a>
            </td>
        <?php endif; ?>
    </tr>
    <?php endforeach; ?>