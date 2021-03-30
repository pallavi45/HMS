
  <?php 
  session_start();
  $username = $_SESSION ['username'];
  
  if ($username)
  {
  }
  else{
      echo ("<script LANGUAGE='JavaScript'>window.location.href='http://localhost/PHP/SE_Project/SE/index.php';
      </script>");
  }
  ?>
<!DOCTYPE html>
<html lang="en">

  <head>
<style>
#ce{
  margin-left:300px;
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>HealthCare Information</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Main -->
        <div id="main">
          <div class="inner">

            <!-- Header -->
            <header id="header">
              <div class="logo">
                <a href="SE_MainPage.php">HealthCare</a>
              </div>
            </header>

            <!-- Banner -->
            <!-- <section class="main-banner">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="banner-content">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="banner-caption">
                            <h4>Welcome to <em>HealthCare</em></h4>
                            <span>about... &amp; ........</span>
                            <p>Info... <strong>.....</strong> ... <strong>.</strong>.</p>
                            <div class="primary-button">
                              <a href="#">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->

            <!-- Services -->
            <!-- <section class="services">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <div class="service-item first-item">
                      <div class="icon"></div>
                      <h4>Web Design</h4>
                      <p>Credit goes to <a rel="nofollow" href="https://www.pexels.com">Pexels</a> and <a rel="nofollow" href="https://www.rawpixel.com">Raw Pixel</a> for images used in this template. Thank you.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item second-item">
                      <div class="icon"></div>
                      <h4>Bootstrap 4</h4>
                      <p>Proin aliquam facilisis ante interdum. Sed nulla feugiat tempus aliquam.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item third-item">
                      <div class="icon"></div>
                      <h4>HTML CSS</h4>
                      <p>Proin aliquam facilisis ante interdum. Sed nulla feugiat tempus aliquam.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item fourth-item">
                      <div class="icon"></div>
                      <h4>Download Free</h4>
                      <p>We have many free to use CSS web templates on our site for you.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item fivth-item">
                      <div class="icon"></div>
                      <h4>Get in touch</h4>
                      <p>You can get the fastest response from <a rel="nofollow" href="https://www.facebook.com/templatemo">templatemo</a> facebook page.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item sixth-item">
                      <div class="icon"></div>
                      <h4>Spread a word</h4>
                      <p>Please tell your friends about our website. This is very helpful.</p>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->

            <!-- Top Image -->
            <!-- <section class="top-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <img src="assets/images/top-image.jpg" alt="">
                    <div class="down-content">
                      <h4>Ante Interdum Chambray</h4>
                      <p>Lorem ipsum dolor amet raclette chambray bitters, hammock celiac slow-carb flexitarian four dollar toast food truck health goth. Air plant brunch food truck vegan scenester organic crucifix irony pour-over pop-up austin hexagon kitsch swag. Godard literally humblebrag cloud bread vice master cleanse chambray typewriter put a bird on it brooklyn forage.</p>
                      <div class="primary-button">
                        <a href="#">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->

            <!-- Left Image -->
            <section class="left-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/b2ap3_large_Choosing-a-Specialist-for-your-Gastroenterology-Procedure.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <div class="right-content">
                      <h4>Gastroenterologist </h4>
                      <p><strong>Gastroenterology</strong><br><br> Gastroenterologist treates for the problem in your digestive track and gall bladder,liver,bileducts and pancreas.</p>
                      <div class="primary-button">
                        <a href="https://en.wikipedia.org/wiki/Gastroenterology" target="_blank">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <!-- Right Image -->
            <section class="right-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="left-content">
                      <h4>Dentist</h4>
                      <p><strong> Dentistry</strong><br><br> Dentist is skilled in prevention and treatment of injuries and malformations of teeth,jaws and mouth.</p>
                      <div class="primary-button">
                        <a href="https://en.wikipedia.org/wiki/Dentist" target="_blank">Read More</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <img src="assets/images/dentist.jpg" alt="">
                  </div>
                </div>
              </div>
            </section>
             <!-- Left Image -->
             <section class="left-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/dermatologist.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <div class="right-content">
                      <h4>Dermatologist </h4>
                      <p><strong>Dermatology</strong><br><br>Dermatologist look after your skin's health and also help you avoid skin issues or skin damage.</p>
                      <div class="primary-button">
                        <a href="https://en.wikipedia.org/wiki/Dermatology" target="_blank">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <!-- Right Image -->
            <section class="right-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="left-content">
                      <h4>Hepatologist</h4>
                      <p><strong>Hepatology</strong><br><br> Its a surgical procedure that removes a liver that no longer functions properly and replaces with healthy liver.</p>
                      <div class="primary-button">
                        <a href="https://en.wikipedia.org/wiki/Hepatology" target="_blank">Read More</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <img src="assets/images/Liver-transplant.jpg" alt="">
                  </div>
                </div>
              </div>
            </section>
             <!-- Left Image -->
             <section class="left-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/neurologist.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <div class="right-content">
                      <h4>Neurologist </h4>
                      <p><strong>Neurology</strong><br><br>A neurologist treats disorders that affect the brain, spinal cord and nerves. Your brain and its memory function depend on good blood flow and healthy nerves to work well.</p>
                      <div class="primary-button">
                        <a href="https://en.wikipedia.org/wiki/Neurology" target="_blank">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <!-- Right Image -->
            <section class="right-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="left-content">
                      <h4>Pediatrician</h4>
                      <p><strong>Pediatrics</strong><br><br>A pediatrician is medical doctor who manages the physical, behavioral, and mental care for children from birth until age 18.</p>
                      <div class="primary-button">
                        <a href="https://en.wikipedia.org/wiki/Pediatrics" target="_blank">Read More</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <img src="assets/images/pediatrician.jpg" alt="">
                  </div>

                 
                  <div class="primary-button" id="ce" >
                  <br><br><br><br><br><br>
                        <a href="https://www.medicalnewstoday.com/articles/types-of-doctors" target="_blank"> More Specialists</a>
                      </div>
                      
                </div>
              </div>
            </section>


          </div>
        </div>

      <!-- Sidebar -->
        <div id="sidebar">

          <div class="inner">

            <!-- Search Box -->
            <section id="search" class="alt">
              <form method="get" action="#">
                <input type="text" name="search" id="search" placeholder="Search..." />
              </form>
            </section>
              
            <!-- Menu -->
            <nav id="menu">
              <ul>
                <li><a href="testhealth.php">Test Your Health</a></li>
                <li><a href="healthtips.php">Health tips</a></li>
                <li><a href="whatforwhat.php">What for what</a></li>
                <li>
                  <span class="opener">Blood Donation</span>
                  <ul>
                    <li><a href="donor.php">Be a Donor</a></li>
                    <li><a href="receiver.php">Be a Receiver</a></li>
                    <!-- <li><a href="#">Third Sub Menu</a></li> -->
                  </ul>
                </li>
                <!-- <li>
                  <span class="opener">Dropdown Two</span>
                  <ul>
                    <li><a href="#">Sub Menu #1</a></li>
                    <li><a href="#">Sub Menu #2</a></li>
                    <li><a href="#">Sub Menu #3</a></li>
                  </ul>
                </li> -->
                <li><a href="knowspcl.php">Know the Specialist</a></li>
                <li><a href="http://localhost/PHP/SE_Project/SE/MainPage/feedback.php">Logout</a></li>
              </ul>
            </nav>

            <!-- Featured Posts -->
            <!-- <div class="featured-posts">
              <div class="heading">
                <h2>Featured Posts</h2>
              </div>
              <div class="owl-carousel owl-theme">
                <a href="#">
                  <div class="featured-item">
                    <img src="assets/images/featured_post_01.jpg" alt="featured one">
                    <p>Aliquam egestas convallis eros sed gravida. Curabitur consequat sit.</p>
                  </div>
                </a>
                <a href="#">
                  <div class="featured-item">
                    <img src="assets/images/featured_post_01.jpg" alt="featured two">
                    <p>Donec a scelerisque massa. Aliquam non iaculis quam. Duis arcu turpis.</p>
                  </div>
                </a>
                <a href="#">
                  <div class="featured-item">
                    <img src="assets/images/featured_post_01.jpg" alt="featured three">
                    <p>Suspendisse ac convallis urna, vitae luctus ante. Donec sit amet.</p>
                  </div>
                </a>
              </div>
            </div> -->

            <!-- Footer -->
            <footer id="footer">
              <p class="copyright">Copyright &copy; 2021 Reserved
              <br>Designed by <a rel="nofollow" href="#">Team 06</a></p>
            </footer>

          </div>
        </div>

    </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>
</body>


  </body>

</html>
