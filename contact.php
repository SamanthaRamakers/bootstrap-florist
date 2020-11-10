<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/main.css">
  <script src="https://kit.fontawesome.com/4744115256.js" crossorigin="anonymous"></script>
  <title>Wonderful website</title>
</head>

<body>
  <header class="sticky-top stck">
    <div class="header topnav">
      <div class="top-bar">
        <div class="container-fluid">
          <div class="col-12 text-right">
            <p><a href=""><img src="../images/images/phone.svg" class="stickytwo" alt="phone">04883652479</a></p>
          </div>
        </div>
      </div>
    </div>
    <!--Navbar-->
    <nav class="navbar navbar-light light-blue lighten-4">

      <!-- Navbar brand -->

      <img src="../images/images/tree-shape-of-thin-trunk-with-small-leaves-circles-outlines.svg" alt=""
        class="treetwo">


      <!-- Collapse button -->
      <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false"
        aria-label="Toggle navigation"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent1">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages_html/services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages_html/onlino.html">Online Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages_html/contact.html">Contact</a>
          </li>
        </ul>
        <!-- Links -->

      </div>
      <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->
  </header>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="6000">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../images/Tochange1.webp" class="d-block w-100" alt="palmtree">
        <div class="carousel-caption">
          <h3>Welcome to</h3>
          <p>Secret garden!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../images/images/Tochange2.jpg" class="d-block w-100" alt="flower">
        <div class="carousel-caption">
          <h3>Welcome to</h3>
          <p>Secret garden !</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../images/Tochange3 (1).webp" class="d-block w-100" alt="green">
        <div class="carousel-caption -50">
          <p>Welcome to</p>
          <p>Secret garden !</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="col-12 text-center mt-5 title">
    <h1 class="secret">Secret Garden</h1>
    <h3 class="floral">Contact us</h3>
  </div>
  <!--Section: Contact v.2-->
  <section class="mb-4">

    <!--Section heading-->
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5"></p>
    <div class="padding section">
      <div class="container">
        <div class="row">

          <!--Grid column-->
          <div class="col-md-12 mb-md-0 mb-5">
            <div class="d-flex justify-content-center">
              <form id="contact-form" name="contact-form" action="mail.php" method="POST">
            </div>

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="name" name="name" class="form-control">
                  <label for="name" class="">Your name</label>
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="email" name="email" class="form-control">
                  <label for="email" class="">Your email</label>
                </div>
              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <input type="text" id="subject" name="subject" class="form-control">
                  <label for="subject" class="">Subject</label>
                </div>
              </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-12">

                <div class="md-form">
                  <textarea type="text" id="message" name="message" rows="2"
                    class="form-control md-textarea"></textarea>
                  <label for="message">Your message</label>
                </div>

              </div>
            </div>
            <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
              <a class="btn btn-primary btncontact" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
          </div>
          <!--Grid column-->
        </div>

      </div>
    </div>

  </section>
  <!--Section: Contact v.2-->
  <!--Google map-->
  <div class="padding section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mb-md-0 mb-5">
          <!--Google map-->
          <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 200px">
            <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
              style="border:0" allowfullscreen></iframe>
          </div>
          <!--Google Maps-->
          <!--Google Maps-->
        </div>
      </div>
    </div>
  </div>
  <!--Google Maps-->
  <footer>
    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark">

      <div style="background-color: #6351ce;">
        <div class="container banner">

          <!-- Grid row-->
          <div class="row py-4 d-flex align-items-center">

            <!-- Grid column -->
            <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
              <h6 class="mb-0">We are social, follow us!</h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 col-lg-7 text-center text-md-right">

              <!-- Facebook -->
              <a class="fb-ic">
                <i class="fab fa-facebook-f white-text mr-4"> </i>
              </a>
              <!-- Twitter -->
              <a class="tw-ic">
                <i class="fab fa-twitter white-text mr-4"> </i>
              </a>
              <!-- Google +-->
              <a class="gplus-ic">
                <i class="fab fa-google-plus-g white-text mr-4"> </i>
              </a>
              <!--Linkedin -->
              <a class="li-ic">
                <i class="fab fa-linkedin-in white-text mr-4"> </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic">
                <i class="fab fa-instagram white-text"> </i>
              </a>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row-->

        </div>
      </div>

      <!-- Footer Links -->
      <div class="container text-center text-md-left mt-5">

        <!-- Grid row -->
        <div class="row mt-3">

          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

            <!-- Content -->
            <h6 class="text-uppercase font-weight-bold">Secret Garden</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>We offer you the best flowers while taking into account the environment.Our work ethic goes further than
              sales. We care for the heart future.</p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Floral services</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <a href="#!">SecretGarden.com</a>
            </p>
            <p>
              <a href="#!">EventsPlanner.com</a>
            </p>
            <p>
              <a href="#!"></a>
            </p>
            <p>
              <a href="#!"></a>
            </p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Useful links</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <a href="#!">My account</a>
            </p>
            <p>
              <a href="#!"></a>
            </p>
            <p>
              <a href="#!"></a>
            </p>
            <p>
              <a href="#!"></a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Contact</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <i class="fas fa-home mr-3"></i> Rue de la Rose polie</p>
            <p>
              <i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p>
              <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p>
              <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
          <a href="index.html"></a><i class="fas fa-arrow-circle-up" class="gotopbtn"></i></a>
        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/">SecretGarden.com</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->
  </footer>
  <!-- Bootstrap javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
  <script src="../js/script.js"></script>
</body>

</html>