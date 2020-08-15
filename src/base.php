<?php require_once 'ti.php' ?>

<!-- To be included in  other files -->
<!-- <--?php include 'src/base.php' ?>-->

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Common Header Tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Murtaza">
  <meta charset="UTF-8">

  <!-- For Specific head tags -->
  <?php startblock('head') ?>
  <?php endblock() ?>
  

  <!-- Common Stylesheet File -->
  <link href="./css/style.css" rel="stylesheet">

  <!-- For Specific CSS files -->
  <?php startblock('css') ?>
  <?php endblock() ?>

  <title>
        <!-- For Specific Title -->
        <?php startblock('title') ?>
        <?php endblock() ?>
  </title>
</head>

<body>
  <!--==========================
  Header Example
  ============================-->
  <header id="header">
    <div class="container">
      <div class="row">
        <div class="logo">
          <h3 class="text-light"><a href="#intro"><span><img src="img/logo1.png"><strong> Company Title</strong></span></a></h3>
        </div>

        <nav class="main-nav d-none d-lg-block">
          <ul>
            <li <?php startblock('navAtHome')?><?php endblock()?>><a href="#">Home</a></li>
            <li <?php startblock('navAtAbout')?><?php endblock()?>><a href="#">About Us</a></li>
            <li class="drop-down <?php startblock('navAtPages')?><?php endblock()?>"><a href="#">Pages</a>
              <ul>
                <li><a  href="#">Page 1</a></li>
                <li><a  href="#">Pages 2</a></li>
                <li><a  href="#">Pages 3</a></li>
                <li><a  href="#">Pages 4</a></li>
                <li><a  href="#">Pages 5</a></li>
                <li><a  href="#">Pages 6</a></li>
              </ul>
            </li>
            <li <?php startblock('navAtBook')?><?php endblock()?>><a  href="#">Book an Appointment</a></li>
            <li <?php startblock('navAtContact')?><?php endblock()?>><a  href="#">Contact Us</a></li>
          </ul>
        </nav>
      </div><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!--==========================
    For Specific Body Section
  ============================-->

  <?php startblock('body') ?>
  <?php endblock() ?>

  <!--==========================
    Footer
  ============================-->
  <section id="footer">
    <footer id="footer" class="section-bg my-3">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12 text-center">
              <div class="footer-links mt-4">
                <h4>Useful Links</h4>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#" target="_blank">Terms of service</a></li>
                  <li><a href="#" target="_blank">Privacy policy</a></li>
                  <li><a href="#" target="_blank">Disclaimer</a></li>
                </ul>
              </div>

            </div>

            <div class="col-md-4 col-sm-12 mt-4 text-center">

              <h4>Social Media</h4>
              <div class="social-links mb-4">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>

            </div>

            <div class="col-md-4 col-sm-12 mt-4 text-center">
              <div class="footer-links">
              <h4 style="margin-bottom:-5px;">Contact Us</h4>
                <div class="container ">
                  <div class="row justify-content-center">
                    <p><strong>Address:</strong><br>
                      XYZ Company
                      12, ABC Street  <br>
                      9th Cross Rd, 2nd Phase, PQR Nagar, <br> 
                      QWERTY, CITY 000000<br>
                      <strong>Phone:</strong> +91-XXXXX XXXXX, +91-XXXXX XXXXX<br>
                      <strong>Email:</strong><a href="#"> &nbsp;info@XYZ.com</a><br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row text-center justify-content-center">
            <div class="copyrighxt">
              &copy; Copyright <strong>2020</strong> | All Rights Reserved <br> Designed by <a href="#" target="_blank">Murtaza</a>
            </div>
          </div>
        </div>
        <!-- </div> -->
    </footer>
  </section><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Common JavaScript Libraries -->
  <script src="#"></script>

  <!--Specific JavaScript Libraries -->
  <?php startblock('script') ?>
  <?php endblock() ?>

</body>

</html>