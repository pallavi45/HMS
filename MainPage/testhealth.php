
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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>HealthCare Information</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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

            <!-- Services -->
            <section class="services">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="service-item first-item">
                      <div class="icon"></div>
                      <h4><a rel="nofollow" href="https://www.proprofs.com/quiz-school/story.php?title=nzm2mjkza77j"  target="_blank"style="color:black;">Physical Checkup</a></h4>
                      <p>A Physical Examination is a routine test to check your overall health.</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="service-item second-item">
                      <div class="icon"></div>
                      <h4><a rel="nofollow" href="https://www.psychologytoday.com/intl/tests" target="_blank" style="color:black;">Mental Checkup</a></h4>
                      <p>A Mental Health Screening is an exam of your Emotional Health.</p>
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
                      <h4>About..</h4>
                      <p><b>Health care, health-care, or healthcare is the maintenance or improvement of health via the prevention, diagnosis, treatment, recovery, or cure of disease, illness, injury, and other physical and mental impairments in people</b><br><br></p>
                      <div class="primary-button">
                        <a href="#">Read More</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <img src="assets/images/right-image.jpg" alt="">
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
                <li><a href="knowspcl.php">Know the Specialist</a></li>
                <li><a href="http://localhost/PHP/SE_Project/SE/MainPage/feedback.php">Logout</a></li>
              </ul>
            </nav>
            <!-- Footer -->
            <footer id="footer">
              <p class="copyright">Copyright &copy; 2021 Reserved
              <br>Designed by <a rel="nofollow" href="#">Team 06</a></p>
            </footer>

          </div>
        </div>

    </div>

  <!-- Scripts -->
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
