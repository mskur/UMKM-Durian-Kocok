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
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
</head>
<!-- Navbar -->
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
<header class="atas py-5" >
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">Durian Kocok Khas Sidoarjo</h1>
                    <p class="lead fw-normal text-white-50 mb-4"><small>Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</small></p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features"><small>Get Started</small></a>
                        <a class="btn btn-outline-light btn-lg px-4" href="#!"><small>Learn More</small></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="images/header/banner/banner1.png" alt="..." /></div>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-5">
        <h1 class="fw-bolder fs-5 mb-4">Discount News</h1>
        <div class="card border-0 shadow rounded-3 overflow-hidden">
            <div class="card-body p-0">
                <div class="row gx-0">
                    <div class="col-lg-6 col-xl-5 py-lg-5">
                        <div class="p-4 p-md-5">
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                            <div class="h2 fw-bolder">Dapatkan 1 Buah Durian</div>
                            <p>Gratis 1 buah durian, apabila telah membeli product durian kocok sebanyak 10 kali dengan menggunakan voucher promo.</p>
                            <a class="stretched-link text-decoration-none" href="#!">
                                Read more
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 d-flex align-items-center">
                        <div class="bg-featured-blog"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

            <section class="py-1">
              <div class="container px-5">
                  <center><h1 class="judul1 fw-bolder fs-5 mb-2">O U R P R O D U C T</h1><h1 class="judul1 fw-bolder fs-1 mb-5" style="margin-top: -1%;">DURIAN KOCOK</h1></center>
              </div>
            </section>
<div class="container d-flex justify-content-center mt-90">  
  <div class="row"> 
    <div class="col-md-3"> 
      <div class="product-wrapper mb-45 text-center"> 
        <div class="product-img"> 
          <a href="#" data-abc="true"> 
            <img src="https://i.imgur.com/tL7ZE46.jpg" alt=""> 
          </a> 
          <span class="text-center"><i class="fa fa-rupee">
          </i> 43,000</span> 
          <div class="product-action"> 
            <div class="product-action-style"> 
              <a href="#"> 
                <i class="fa fa-plus"></i> 
              </a> 
              <a href="#"> 
                <i class="fa fa-heart"></i> 
              </a> 
              <a href="#"> 
                <i class="fa fa-shopping-cart"></i> 
              </a> 
            </div> 
          </div> 
        </div> 
      </div> 
    </div> 
    <div class="col-md-3"> 
      <div class="product-wrapper mb-45 text-center"> 
        <div class="product-img"> 
          <a href="#" data-abc="true"> 
            <img src="https://i.imgur.com/lAQxXCK.jpg" alt=""> 
          </a> 
          <span><i class="fa fa-rupee"></i> 41,000</span> 
          <div class="product-action"> 
            <div class="product-action-style"> 
              <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true"> 
                <i class="fa fa-plus"></i> 
              </a> 
              <a class="action-heart" title="Wishlist" href="#" data-abc="true"> 
                <i class="fa fa-heart"></i> 
              </a> 
              <a class="action-cart" title="Add To Cart" href="#" data-abc="true"> 
                <i class="fa fa-shopping-cart"></i> 
              </a> 
            </div> 
          </div> 
        </div> 
      </div> 
    </div>  
    <div class="col-md-3"> 
      <div class="product-wrapper mb-45 text-center"> 
        <div class="product-img"> 
          <a href="#" data-abc="true">
           <img src="https://i.imgur.com/HxEEu5g.jpg" alt=""> 
         </a> 
         <span>
          <i class="fa fa-rupee"></i> 33,000
        </span> 
        <div class="product-action"> 
          <div class="product-action-style"> 
            <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true"> 
              <i class="fa fa-plus"></i> 
            </a> 
            <a class="action-heart" title="Wishlist" href="#" data-abc="true"> 
              <i class="fa fa-heart"></i> 
            </a> 
            <a class="action-cart" title="Add To Cart" href="#" data-abc="true"> 
              <i class="fa fa-shopping-cart"></i> 
            </a> 
          </div> 
        </div> 
      </div> 
    </div> 
  </div>  
  <div class="col-md-3"> 
    <div class="product-wrapper mb-45 text-center"> 
      <div class="product-img"> 
        <a href="#" data-abc="true"> 
          <img src="https://i.imgur.com/lAQxXCK.jpg" alt=""> 
        </a> 
        <span><i class="fa fa-rupee"></i> 23,000</span> 
        <div class="product-action"> 
          <div class="product-action-style"> 
            <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true"> 
              <i class="fa fa-plus"></i> </a> 
              <a class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> 
              <a class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i> </a> 
            </div> 
          </div> 
        </div> 
      </div> 
    </div> 
  </div> 
</div>

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
            <i class="fas fa-gem me-3"></i>Durian Kocok
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
            <a href="#!" class="text-reset">Durian Kocok</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Es Permen Karet</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Es Teh</a>
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
            <a href="#!" class="text-reset">Dashboard</a>
          </p>
          <p>
            <a href="#!" class="text-reset">About</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Product</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Contact Us</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Sedati, Sidoarjo, Jawa Timur</p>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script><script  src="./script.js"></script>
<script>
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
</script>
</body>
</html>
