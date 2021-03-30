
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

<!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<style>
.form-popup {
            /* display: none; */
            position: fixed;
            bottom: 0;
            right: 15px;
            /*border: 3px solid #f1f1f1;*/
            width: 400px;
            height: 500px;
            margin-top: 400pc;
            margin-right: 490px;
            z-index: 9;
        
            overflow-y: scroll;
        }
        .form-container {
            max-width: 310px;
            padding: 10px;
            /*background-color: white;*/
        }
        /* Full-width textarea */
        
        .form-container textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
            resize: none;
            /* min-height: 200px; */
        }
        /* When the textarea gets focus, do something */
        
        .form-container textarea:focus {
            background-color: #ddd;
            /*outline: none;*/
        }
        /* Set a style for the submit/send button */
        
        .form-container .btn {
            background-color: rgb(66, 83, 235);
            color: rgb(251, 217, 217);
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
            opacity: 0.8;
        }
        .form-container .cancel {
            background-color: rgb(106, 233, 48);
        }
        /* Add some hover effects to buttons */
        
        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
        }
        .form-container {
            max-width: 400px;
            padding-left: 10px;
            padding-right: -10px;
            background-color: #7568e3;
        }
        /* Full-width input fields */
        
        .form-container input[type=text],
        input[type=email],
        input[type=tel],
        .form-container input[type=password] {
            width: 75%;
            padding-right: 15px;
            font-size: 17px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }
        /* When the inputs get focus, do something */
        
        .form-container input[type=text]:focus,
        input[type=email]:focus,
        input[type=tel]:focus,
        .form-container input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }
        
        
        /* Set a style for the submit/login button */
        
        .form-container .btn {
            background-color: #4CAF50;
            color: white;
            padding: 13px 13px;
            border: none;
            cursor: pointer;
            width: 50%;
            margin-bottom: 10px;
            opacity: 0.8;
        }
        /* Add a red background color to the cancel button */
        
        .form-container .cancel {
            background-color: red;
        }
        .button1 {
            background-color: #4CAF50; 
            border: none;
            color: white;
            padding: 10px 22px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 0px 0px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
        }
</style>
  </head>

<body class="is-preload">
<div style="opacity: 0.4;" id="new">
    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Main -->
        <div id="main">
          <div class="inner">

            <!-- Header -->
            <header id="header">
              <div class="logo">
                <a href="#">HealthCare</a>
              </div>
            </header>

            <!-- Banner -->
            <section class="main-banner">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="banner-content">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="banner-caption">
                            <h4>Welcome to <em>HealthCare</em></h4>
                            <!-- <span>about... &amp; ........</span>
                            <p>Info... <strong>.....</strong> ... <strong>.</strong>.</p> -->
                            <div class="primary-button"><br><br><br>
                              <!-- <a href="#">Read More</a> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

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
            <!-- <section class="left-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/left-image.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <div class="right-content">
                      <h4>HealthCare Information </h4>
                      <p>Welcome to HealthCare.....<br><br>the remaining information.......</p>
                      <div class="primary-button">
                        <a href="#">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->
            

            <!-- Right Image -->
            <section class="right-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="left-content">
                      <h4>About..</h4>
                      <p>.....<br><br>....</p>
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
                <li><a href="#">Test Your Health</a></li>
                <li><a href="#">Health tips</a></li>
                <li><a href="#">What for what</a></li>
                <li>
                  <span class="opener">Blood Donation</span>
                  <ul>
                    <li><a href="#">Be a Donor</a></li>
                    <li><a href="#">Be a Receiver</a></li>
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
                <li><a href="#">Know the Specialist</a></li>
                <li><a href="#">Logout</a></li>
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
</div>
    <center>   
    <div class="form-popup" id="myForm" method="POST">
        <form action="feedbacksend.php" class="form-container" method="post"> <br>
            <div class="col-12">
                          <textarea name="demomessage" id="demo-message" placeholder="Give us feedback" rows="6"></textarea>
            </div>
            <br>
            <button type="submit" name="submit"class="button1">Submit</button>
            <!--<a href="http://localhost/PHP/NewPage/Admin/index.html"><button type="submit" class="button1">Cancel</button> -->
            


            <button type="button" class="button1" onclick="closeForm()">Close</button>
        </form>
    </div>
       </center>
       
    <script>
        function closeForm() {
            document.getElementById("new").style.display = "none";
            window.location.href = "http://localhost/PHP/SE_Project/SE/index.php";

        }
    </script>
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
