<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WebNet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/logo.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/boots.css')}}" rel="stylesheet">
  <link href="{{asset('css/font.css')}}" rel="stylesheet">
  

</head>
<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: blue;
  color: white;
  cursor: pointer;
  padding: 6px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color:#1a1919;">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto"><img src="assets/img/net.png" width="60px"alt="logo"></div>
      <nav class="nav-menu d-none d-lg-block" style="background-color:#1a1919;">
        <ul>
          <li><a href="{{('page')}}">Home</a></li>
          <li><a href="{{('aboutus')}}">About</a></li>
          <li><a href="{{('services')}}">Services</a></li>
          <li><a href="{{('project')}}">Project</a></li>
          <li><a href="{{('team')}}">Team</a></li>
          <li><a href="{{('contact')}}">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header --><br><br>


    <main class="py-4">
            @yield('content')

    </main>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up">&nbsp;Top</i></button>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top" style="background-color:#e6e3e3;">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-contact">
            <h3>WebNet</h3>
            <p>
              Thimphu<br>
              Bhutan<br><br>
              <strong>Phone:</strong> +975 17611798/+975 17585081<br>
              <strong>Email:</strong>webnets2020@gmail.com<br>
            </p>
          </div>
          <div class="col-lg-6 col-md-6 footer-links" style="a">
            <h4>Our Social Networks</h4>
            <p>Grow your Business</p>
            <span>keep in touch</span>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/WebNet-296747400507059/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class=" footer-bottom clearfix" style="background-color:#1a1919;">
      <div class="copyright">
      &nbsp;&nbsp;
        &copy; Copyright <strong><span>WebNet</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('js/boots.js')}}"></script>
  <script src="{{asset('js/font.js')}}"></script>

  <script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>

</html>