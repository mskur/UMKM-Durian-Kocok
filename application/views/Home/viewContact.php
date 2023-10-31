<?php require 'template/homeHeader.php' ?>

<h1>INI CONTACT</h1>


    <?= $contact->alamatWebsite; ?>
    <?= $contact->nomorTelepon; ?>
    <?= $contact->alamatLengkap; ?>
    <?= $contact->alamatLive; ?>
    <!-- href to link alamatLive gmaps -->
    <a href="<?= $contact->alamatLive; ?>">Tes</a>
