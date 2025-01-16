<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Durian Kocok</title>
  <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./swiper-bundle.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <style type="text/css">
  @keyframes moveBackground {
      0% {
        background-position: 0% 50%;
      }
      100% {
        background-position: 100% 50%;
      }
    }

    /* Section dengan background bergerak */
    #scroll-target {
      padding: 100px 0;
       background: linear-gradient(90deg, #4A00E0, #8E2DE2, #FF4F8E, #C0CD0E);
      background-size: 300% 300%;
      animation: moveBackground 15s ease infinite;
      color: white;
    }

    /* Card styling */
    .card-container {
      padding: 20px;
      border-radius: 15px;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      transition: box-shadow 0.3s ease, transform 0.3s ease;
      cursor: pointer;
    }

     .card-container:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      transform: scale(1.05); /* Scale up by 5% on hover */
    }

    /* Style untuk text di dalam card */
    .card-text {
      font-size: 1.5rem;
      color: #728815;
    }

  .custom-btn {
      background-color: #C0CD0E;
      border-color: #C0CD0E;
      color: #fff;
      padding: 10px 20px;
      font-size: 16px;
      font-family: "Dosis", sans-serif;
      border-radius: 5px;
      transition: background-color 0.3s ease-in-out, font-family 0.3s ease-in-out;
    }

  .custom-btn:hover {
    background-color: #A9B800; /* Adjust the color for the hover effect */
    font-family: "Dosis", sans-serif;
    color: #728815;
   } 

    /* CSS untuk tata letak responsif */
    .responsive-image {
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 767px) {
        /* Perubahan untuk layar berukuran kecil (Mobile) */
        .image-container {
            text-align: center;
        }

        .image-container img {
            margin-bottom: 20%;
        }
    }

    .image-container {
      position: relative;

    }

    .image-container img {
      max-width: 100%; /* Membuat gambar responsif */
      height: auto;
    }

    .section-two {
      position: relative;
      overflow: hidden;
    }

    .section-two img {
      max-width: 100%; /* Membuat gambar responsif */
      height: auto;
    }

    .social-icon {
      align-items: center;
      text-decoration: none;
    }

    .social-icon p {
      margin: 0;
      font-size: 13.5px;
      color: #728815;
      transition: color 0.3s ease-in-out;
    }

    .social-icon:hover p {
      color: #ff0000; /* Ganti dengan warna yang diinginkan saat hover */
    }

}
  </style>
</head><!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-white">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
          height="15"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="#">
        <i class="fas fa-shopping-cart"></i>
      </a>

      <!-- Notifications -->
      <div class="dropdown">
        <a
          class="text-reset me-3 dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">1</span>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li>
            <a class="dropdown-item" href="#">Some news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </div>
      <!-- Avatar -->
      <div class="dropdown">
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <img
            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
            class="rounded-circle"
            height="25"
            alt="Admin"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<!-- Header-->
<header class="py-5 bg-image" style="background-image: url('images/banner/banner-1.jpg'); background-size: cover;">
    <div class="container px-5">
        <div class="row align-items-center"> <!-- Menghapus kelas "justify-content-start" karena tidak perlu dalam konteks ini -->
            <div class="col-lg-8 col-xxl-6">
                <div class="my-5">
                    <div class="mb-4"> <!-- Menghapus kelas "d-flex" karena tidak diperlukan -->
                        <div class="text-start text-white">
                            <h1 class="fw-bolder mb-3">Empowering Your Web Presence</h1>
                            <p class="lead fw-normal mb-4">We are dedicated to simplifying website development for everyone. Our mission is to provide quality, functional website templates and themes accessible to all. Whether you choose our open-source free products or support us by purchasing premium offerings, we're here for you.</p>
                            <a class="btn custom-btn btn-lg" href="#scroll-target">Read Our Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<section class="py-5 bg-light" id="scroll-target">
    <div class="container px-5">
      <div class="row gx-5 align-items-center position-relative">
        <div class="col-lg-6 mb-4 image-container" id="animatedImage">
          <img class="image rounded position-relative responsive-image" src="images/hero/owner.png" alt="Founder Image" style="bottom: -78.2px; left: 10px;">
        </div>
          <div class="col-lg-6">
            <div class="text-center">
                <h1 class="fw-bold mb-5" style="font-family: 'Uni Sans'; font-size: 3rem;">ABOUT FOUNDER</h1>
            </div>
            <div class="card-container">
              <h2 class="fw-bolder card-text" style="font-family: 'dosis', sans-serif;">Our founding</h2>
              <h5 class="card-text">Andri Anko Wijaya</h5>
              <p class="lead fw-normal fs-6 text-muted card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
            </div>
            <div class="card-container">
              <h2 class="fw-bolder card-text" style="font-family: 'dosis', sans-serif;">Visi & Misi</h2>
              <p class="lead fw-normal fs-6 text-muted card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
            </div>
            <div class="container px-0">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-container">
                    <div class="social-icons">
                      <a href="#" class="social-icon"><p class="lead fw-bold card-text"><i class="fab fa-facebook"></i> | DurianKocok</p></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-container">
                    <div class="social-icons">
                      <a href="#" class="social-icon"><p class="lead fw-bold card-text"><i class="fab fa-twitter"></i> | DurianKocok</p></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-container">
                    <div class="social-icons">
                      <a href="#" class="social-icon"><p class="lead fw-bold card-text"><i class="fab fa-instagram"></i> | DurianKocok</p></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container px-0">
              <button class="btn custom-btn" style="width:100%;">Search Product</button>
            </div>
          </div>
      </div>
    </div>
  </section>

<!-- About section two-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last mb-4 mb-lg-0 image-container">
                            <img class="image responsive-image" src="your_image_url_1.jpg" alt="Growth Image 1" style="max-width: 100%;">
                        </div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Growth &amp; beyond</h2>
                            <p class="lead fw-normal fs-6 text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan slide lainnya sesuai kebutuhan -->
                <div class="swiper-slide">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last mb-4 mb-lg-0 image-container">
                            <img class="image responsive-image" src="your_image_url_2.jpg" alt="Growth Image 2" style="max-width: 100%;">
                        </div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Growth &amp; beyond</h2>
                            <p class="lead fw-normal fs-6 text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


    <!-- Team members section with Bootstrap Carousel -->
    <section class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="fw-bolder">Our Team Support Website</h2>
                <p class="lead fw-normal text-muted mb-5">Website UMKM buatan UPN Veteran Jawa Timur</p>
            </div>

              <!-- Bootstrap Carousel -->
              <div class="slide-container swiper">
              <div class="slide-content">
                  <div class="card-wrapper swiper-wrapper">
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>

                              <div class="card-image">
                                  <img src="images/hero/zaim (1).jpeg" alt="" class="card-img">
                              </div>
                          </div>

                          <div class="card-content">
                              <h2 class="name">Syarifuz Zaim</h2>
                              <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                              <button class="button">View More</button>
                          </div>
                      </div>
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>

                              <div class="card-image">
                                  <img src="images/hero/imam.jpeg" alt="" class="card-img">
                              </div>
                          </div>

                          <div class="card-content">
                              <h2 class="name">Imam Maskuri</h2>
                              <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                              <button class="button">View More</button>
                          </div>
                      </div>
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>

                              <div class="card-image">
                                  <img src="images/hero/mia.jpeg" alt="" class="card-img">
                              </div>
                          </div>

                          <div class="card-content">
                              <h2 class="name">Mia Dwi Umiati</h2>
                              <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                              <button class="button">View More</button>
                          </div>
                      </div>
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>

                              <div class="card-image">
                                  <img src="images/hero/novi.jpeg" alt="" class="card-img">
                              </div>
                          </div>

                          <div class="card-content">
                              <h2 class="name">Novi Dwi Astuti</h2>
                              <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                              <button class="button">View More</button>
                          </div>
                      </div>
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>

                              <div class="card-image">
                                  <img src="images/hero/mahen.jpeg" alt="" class="card-img">
                              </div>
                          </div>

                          <div class="card-content">
                              <h2 class="name">Mahendra Wisnu Wardana</h2>
                              <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                              <button class="button">View More</button>
                          </div>
                      </div>
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>

                              <div class="card-image">
                                  <img src="images/hero/novi.jpeg" alt="" class="card-img">
                              </div>
                          </div>

                          <div class="card-content">
                              <h2 class="name">Ibu Retno Mumpuni</h2>
                              <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                              <button class="button">View More</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>        
            </div>
        </div>
    </section>



<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MAHENDRAWIS</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<!-- partial -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script><script  src="./script.js"></script>
<script src="swiper-bundle.min.js"></script>
<script src="script.js"></script>
<script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 5000, // Waktu jeda antara slide (dalam milidetik), contoh: 5000ms = 5 detik
            disableOnInteraction: false, // Tetapkan ke false agar autoplay tidak dihentikan saat interaksi pengguna (klik, geser, dll.)
        },
    });

    // Animasi menggunakan GSAP
    gsap.to("#animatedImage", { duration: 1, y: -50, scale: 1.1, ease: "power2.out" });

    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

        // Use JavaScript to handle sliding behavior
    var teamCarousel = new bootstrap.Carousel(document.getElementById('teamCarousel'), {
            interval: false, // Disable automatic sliding
        });

        // Handle sliding to the next set of cards
        document.getElementById('teamCarouselNext').addEventListener('click', function () {
            teamCarousel.next();
        });

        // Handle sliding to the previous set of cards
        document.getElementById('teamCarouselPrev').addEventListener('click', function () {
            teamCarousel.prev();
        });
</script>

</body>
</html>
