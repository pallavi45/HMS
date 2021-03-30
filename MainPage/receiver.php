
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

    <title>DonorPage</title>

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

            <!-- Page Heading -->
            <div class="page-heading">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <h1>Receive Blood</h1>
                    <p><strong>Blood</strong>receive .....</p>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Tables -->
            

            <!-- Forms -->
            <section class="forms">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2>Enter Details</h2>
                    </div>
                    <form id="contact" action="receiverdetails.php" method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <fieldset>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6">
                          <fieldset>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Your email/phno..." required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6">
                          <fieldset>DeadLine:<br><br>
                            <input name="deadline" type="date" class="form-control" id="deadline" placeholder="Deadline" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <select name="category" id="category">
                            <option value="categories" selected>Select BloodGroup</option>
                            <option value="O+">O+</option>
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>

                          </select>
                        </div>
                        <!-- <div class="col-md-4 col-sm-4">
                          <div class="radio-item">
                            <input name="demo-small" type="checkbox" id="demo-priority-small" value="small">
                            <label for="demo-priority-small">Small</label>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                          <div class="radio-item">
                            <input name="demo-medium" type="checkbox" id="demo-priority-medium" value="medium">
                            <label for="demo-priority-medium">Medium</label>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                          <div class="radio-item">
                            <input name="demo-large" type="checkbox" id="demo-priority-large" value="large" >
                            <label for="demo-priority-large">Large</label>
                          </div>
                        </div> -->
                        <div class="col-md-4 col-sm-4">
                          <div class="circle-item">
                            <input name="demopriority" type="radio" id="demo-small" value="16-20" checked>
                            <label for="demo-small">Age: 16 - 20</label>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                          <div class="circle-item">
                            <input name="demopriority" type="radio" id="demo-medium" value="21-30">
                            <label for="demo-medium">Age: 21 - 30</label>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                          <div class="circle-item">
                            <input name="demopriority" type="radio" id="demo-old" value="30+">
                            <label for="demo-old">Age: 30+</label>
                          </div>
                        </div>
                        <div class="col-12">
                          <textarea name="demomessage" id="demo-message" placeholder="Address" rows="6"></textarea>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" id="form-submit" class="button">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>


            <!-- Tables -->
           

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
