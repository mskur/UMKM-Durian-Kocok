<?php require 'template/homeHeader.php' ?>
<!-- Header Kontak -->
<header class="tengah bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-5 fw-bolder text-white mb-2">CONTACT ME</h1>
        <p class="lead fw-normal text-white-100 mb-4"><small>Quickly design and customize responsive mobile-first</br> sites with Bootstrap, the world’s most popular front-end open source toolkit!</small></p>
    </div>
</header>

<!-- Konten Halaman Kontak -->
<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="margin-bottom: 5%; margin-top:3%">
      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?= $contact->alamatLengkap; ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>AndriankWJ@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?= $contact->nomorTelepon; ?></p>
              </div>

              <iframe src="<?= $contact->alamatLive; ?>" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>
          
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="HomeDURCOK/addPesananAction" method="post" class="php-email-form">
              <div class="row">
                <div class="form-group">
                  <label for="namaPemesan">Nama Pemesan</label>
                  <input type="text" class="form-control" name="namaPemesan" id="namaPemesan" placeholder="Nama Pemesan" value="<?= set_value('namaPemesan'); ?>" required>
                  <?= form_error('namaPemesan'); ?>
                </div>
              <div class="form-group">
                <label for="alamatPemesan">Alamat Pemesan</label>
                <input type="text" class="form-control" name="alamatPemesan" id="Alamat Pemesan" placeholder="alamatPemesan" value="<?= set_value('alamatPemesan'); ?>" required>
                <?= form_error('alamatPemesan'); ?>
              </div>
              <div class="form-group">
                <label for="deskripsiPesanan">Deskripsi Pesanan</label>
                <textarea class="form-control" name="deskripsiPesanan" id="eskripsiPesanan" placeholder="Deskripsi Pesanan" value="<?= set_value('deskripsiPesanan'); ?>" required></textarea>
                <?= form_error('deskripsiPesanan'); ?>
              </div>
              <div class="form-group">
                <label for="noWhatsapp">Nomor Whatsapp</label>
                <input class="form-control" type="text" name="noWhatsapp" id="noWhatsapp" placeholder="Nomer Whatsapp" pattern="[0-9]*" maxlength="15" value="<?= set_value('noWhatsapp'); ?>" required>
                <?= form_error('noWhatsapp'); ?>   
              </div>
              <p><?= $this->session->flashdata('notification'); ?></p>
              <div class="text-center"><input class="btn btn-primary" type="submit" value="Pesan Sekarang"></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


<?php require 'template/homeFooter.php' ?>