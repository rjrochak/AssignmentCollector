 <?php
         //require("database.php");
  
         session_start();
         $id = $_SESSION['id'];
         if(empty($id)){
         header('location:adminlogin.php');
         exit();
          } 
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>yashamgeeks</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>
    
    <!-- Top Menu 1 -->
<section class="w3l-top-menu-1">
    <div class="top-hd">
      <div class="container">
    <header class="row top-menu-top">
      <div class="accounts col-md-9 col-6">
          <li class="top_li"><span class="fa fa-phone"></span><a href="#">+91 6263765841</a> </li>
          <li class="top_li1"><span class="fa fa-envelope-o"></span> <a href="#" class="mail">yashamgeeks698@gmail.com</a>  </li>
      </div>
      <div class="social-top col-md-3 col-6">
        <a href="registration.php" class="btn btn-secondary btn-theme4">Registration Now</a>
      </div>
    </header>
  </div>
  </div>
  </section>

  <!-- //Top Menu 1 -->
 <section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <a class="navbar-brand" href="index.html"><span class="fa fa-pencil-square-o "></span> yashamgeeks</a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="admin/adminDashboard.php">Dashboard</a>
          </li>
        </ul>
       
      </div>
    </div>
  </nav>
</section>


<section class="w3l-main-slider" id="home">
  <!-- main-slider -->
  <div class="companies20-content">
   
    <div class="owl-one owl-carousel owl-theme">
      <div class="item">
        <li>
          <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Better Education For A Better World</h5>
                 <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="#">Read More</a>
                </div>
                
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Explore The World Of Our Graduates</h5>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="#">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Exceptional People, Exceptional Care</h5>
                 <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="#">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Explore The World Of Our Graduates</h5>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="#">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>

 <script src="assets/js/owl.carousel.js"></script>
  <!-- script for -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- /main-slider -->
</section>


<section class="w3l-feature-3" id="features">
  <div class="grid top-bottom mb-lg-5 pb-lg-5">
    <div class="container">
      
      <div class="middle-section grid-column text-center">
        <div class="three-grids-columns">
          <span class="fa fa-laptop"></span>
          <h4>Learn Courses Online</h4>
          <p>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
          <a href="#" class="btn btn-secondary btn-theme3 mt-4">Read More </a>
        </div>
        <div class="three-grids-columns">
          <span class="fa fa-users"></span>
          <h4>Highly Qualified Teachers</h4>
          <p>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
          <a href="#" class="btn btn-secondary btn-theme3 mt-4">Read More </a>
        </div>
        <div class="three-grids-columns">
          <span class="fa fa-book"></span>
          <h4>Book Library & Stores</h4>
          <p>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
          <a href="#" class="btn btn-secondary btn-theme3 mt-4">Read More </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- features-4 block -->
<section class="w3l-index1" id="about">
  <div class="calltoaction-20  py-5 editContent">
    <div class="container py-md-3">
    
      <div class="calltoaction-20-content row">
        <div class="column center-align-self col-lg-6 pr-lg-5">
          <h5 class="editContent">Welcome To Our Campus</h5>
          <p class="more-gap editContent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
            architecto, ex veritatis tempora aliquid labore natus autem iusto magni dicta incidunt nostrum
            odit veniam voluptas provident minus saepe reiciendis nulla dolore delectus molestias</p>
            <p class="more-gap editContent">Numquam
              architecto, ex veritatis tempora aliquid labore natus autem iusto magni dicta incidunt nostrum
              odit veniam voluptas provident </p>
              <a class="btn btn-secondary btn-theme2 mt-3" href="#"> Read More</a>
        </div>
        <div class="column ccont-left col-lg-6">
          <img src="assets/images/g1.jpg" class="img-responsive" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
 


<!-- grids block 5 -->
<section class="w3l-footer-29-main">
  <div class="footer-29">
      <div class="container">
          <div class="d-grid grid-col-4 footer-top-29">
              <div class="footer-list-29 footer-1">
                  <h6 class="footer-title-29">Contact Us</h6>
                  <ul>
                      <li><p><span class="fa fa-map-marker"></span>yashamgeeks.</p></li>
                      <li><a href="#"><span class="fa fa-phone"></span> +91 6263764289</a></li>
                      <li><a href="#" class="mail"><span class="fa fa-envelope-open-o"></span> yashamgeeks698@gmail.com</a></li>
                  </ul>
                  <div class="main-social-footer-29">
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                      <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                      <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                      <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                  </div>
              </div>
              <div class="footer-list-29 footer-2">
                  <ul>
                      <h6 class="footer-title-29">Featured Links</h6>
                      <li><a href="contact.html">Graduation</a></li>
                      <li><a href="contact.html">Admissions</a></li>
                      <li><a href="contact.html">Book Store</a></li>
                      <li><a href="contact.html">International</a></li>
                      <li><a href="contact.html">Courses</a></li>
                  </ul>
              </div>
              <div class="footer-list-29 footer-3">
                 registration.php
                  <h6 class="footer-title-29">Newsletter </h6>
          <form action="#" class="subscribe" method="post">
            <input type="email" name="email" placeholder="Email" required="">
            <button><span class="fa fa-envelope-o"></span></button>
          </form>
          <p>Subscribe and get our weekly newsletter</p>
          <p>We'll never share your email address</p>
        
              </div>
              <div class="footer-list-29 footer-4">
                  <ul>
                      <h6 class="footer-title-29">Quick Links</h6>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="about.html">About</a></li>
                      <li><a href="studentDhashbord">Student Login</a></li>
                      <li><a href="adminDashbor">Admin Login</a></li>
                  </ul>
              </div>
          </div>
          <div class="d-grid grid-col-2 bottom-copies">
              <p class="copy-footer-29">© 2022 Yashamgeeks. All rights reserved | Designed by <a href="#">Yashamgeeks.com</a></p>
               <ul class="list-btm-29">
                      <li><a href="#link">Privacy policy</a></li>
                      <li><a href="#link">Terms of service</a></li>
                      
                  </ul>
          </div>
      </div>
  </div>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!-- Template JavaScript -->
<script src="assets/js/all.js"></script>
<!-- Smooth scrolling -->
<!-- <script src="assets/js/smoothscroll.js"></script> -->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<script src="js/bootsrap.js"></script>
<script src="js/custom.js"></script>
<script src="js/popper.js"></script>
<!-- //script -->
  
</body>
</html>
