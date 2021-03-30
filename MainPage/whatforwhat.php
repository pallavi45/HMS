
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

    <title>What for what </title>

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
                    <h1>What For What</h1>
                    <p>most searched medicine or disease....</p>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Tables -->
            <section class="tables">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2>List..</h2>
                    </div>
                    <div class="default-table">
                      <table>
                        <thead>
                          <tr>
                            <th>symptoms</th>
                            <th>Disease</th>
                            <th>cure</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>    Eye irritation,Runny nose,Stuffy nose,Puffy, watery eyes,Sneezing,Inflamed, itchy nose and throat
                            </td>
                            <td>Allergies</td>
                            <td>Antihistamines,Decongestants,Anti-inflammatory agents (e.g., corticosteroid),Allergy shots</td>
                          </tr>
                          <tr>
                            <td>fever (100° F),headache,more intense pain and fatigue, and more severe, often dry cough.</td>
                            <td>Cold and Flu</td>
                            <td>    Rest more than usual and avoid exercise until symptoms are gone.
                                    Drink lots of clear fluids (e.g., water, tea).
                                    Stay away from cigarette smoke.
                                    Do not take antibiotics unless specifically prescribed for you to cure the illness from which you currently suffer.
                                    Avoid drinking alcohol because it weakens your immune system and may interact with medications.
                                    Avoid caffeine, which can increase congestion and dehydration.
                                    Eat a well-balanced diet, including fruits, vegetables, and grains.
                                </td>
                          </tr>
                          <tr>
                            <td>These symptoms may last a few hours to several weeks: redness, itching, tearing, burning sensation, pus-like discharge and/or crusting of the eyelids. Because conjunctivitis causes inflammation of the small blood vessels in the conjunctiva to become more prominent, the whites of your eyes will appear pink or red. When you wake you are likely to feel that your eyelids are pasted shut, and your vision may not be as clear as usual.</td>
                            <td>Conjunctivitis (“pink eye“)</td>
                            <td>Wash your hands frequently to prevent spreading an existing infection to your other eye, and to other people.
                                Don’t rub your eyes.
                                Use a cool wet washcloth to soak off any crusting.
                                Use a warm or cool compress to reduce discomfort.
                                Discard eye make-up because it may cause future infection.
                                Wash any clothing that may be contaminated, including towels and pillowcases. Try to use clean towels and pillowcases everyday.</td>
                          </tr>
                          <tr>
                            <td>    watery, loose stools
                                    frequent bowel movements
                                    cramping or pain in the abdomen, nausea, bloating
                                    possibly fever or bloody stools, depending on the cause
                                </td>
                            <td>Diarrhea</td>
                            <td>Avoid foods that are milk-based, greasy, high-fiber, or very sweet because these are likely to aggravate diarrhea.
                                Avoid caffeine and alcohol.
                                Do not eat solid food if you have signs of dehydration (thirst, light-headed, dark urine). Instead, drink about 2 cups of clear fluids per hour (if vomiting isn’t present), such as sports drinks and broth. Water alone is not enough because your body needs sodium and sugar to replace what it’s losing.</td>
                          </tr>
                          <tr>
                            <td>The most well known symptom of “mono“ is extreme fatigue, forcing the infected person to nap frequently. If you experience such extreme fatigue accompanied by other symptoms, such as swollen lymph glands and spleen, sore throat, fever, loss of appetite, and muscle aches, you may want to get tested for mono. </td>
                            <td>Mononucleosis</td>
                            <td>Mono is a virus, so antibiotics won’t help. Make sure you get plenty of rest, eat healthy foods, avoid alcohol (because your liver may be inflamed and drinking weakens immune responses), drink plenty of fluids, take aspirin or an aspirin substitute to reduce pain and fever, gargle salt water to relieve sore throat, and avoid strenuous activity.</td>
                          </tr>
                        </tbody>
                      </table>
                      <ul class="table-pagination">
                        <li><a href="#">Previous</a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">Next</a></li>
                      </ul>
                    </div>
                    <!-- <div class="alternate-table">
                      <table>
                        <thead>
                          <tr>
                            <th>Product no.</th>
                            <th>Description</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>#2005</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>$19.95</td>
                          </tr>
                          <tr>
                            <td>#2006</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>$19.95</td>
                          </tr>
                          <tr>
                            <td>#2007</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>$19.95</td>
                          </tr>
                          <tr>
                            <td>#2008</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>$19.95</td>
                          </tr>
                          <tr>
                            <td>#2008</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>$19.95</td>
                          </tr>
                        </tbody>
                      </table>
                      <ul class="table-pagination">
                        <li><a href="#">Previous</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">...</a></li>
                        <li class="active"><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">Next</a></li>
                      </ul>
                    </div> -->
                  </div>
                </div>
              </div>
            </section>

            <!-- Forms -->
            <!-- <section class="forms">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2>Forms</h2>
                    </div>
                    <form id="contact" action="" method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <fieldset>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6">
                          <fieldset>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <select name="category" id="category">
                            <option value="categories" selected>Select Category</option>
                            <option value="Featured">General</option>
                            <option value="Newest">Specific</option>
                            <option value="Low Price">Technical</option>
                            <option value="High Price">Application</option>
                          </select>
                        </div>
                        <div class="col-md-4 col-sm-4">
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
                        </div>
                        <div class="col-md-4 col-sm-4">
                          <div class="circle-item">
                            <input name="demo-priority" type="radio" id="demo-small" value="16-20" checked>
                            <label for="demo-small">Age: 16 - 20</label>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                          <div class="circle-item">
                            <input name="demo-priority" type="radio" id="demo-medium" value="21-30">
                            <label for="demo-medium">Age: 21 - 30</label>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                          <div class="circle-item">
                            <input name="demo-priority" type="radio" id="demo-old" value="30+">
                            <label for="demo-old">Age: 30+</label>
                          </div>
                        </div>
                        <div class="col-12">
                          <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" id="form-submit" class="button">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section> -->


            <!-- Tables -->
            <!-- <section class="buttons">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2>Buttons</h2>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="filled-rectangle-button">
                          <a href="#">Filled Button</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="border-rectangle-button">
                          <a href="#">Border Button</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="filled-radius-button">
                          <a href="#">Filled Button</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="border-radius-button">
                          <a href="#">Border Button</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="filled-rounded-button">
                          <a href="#">Filled Button</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="border-rounded-button">
                          <a href="#">Border Button</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="filled-icon-button">
                          <a href="#"><i class="fa fa-check"></i>Filled Button</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="border-icon-button">
                          <a href="#"><i class="fa fa-check"></i>Border Button</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="filled-rectangle-button">
                          <a href="#">Filled Button</a>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="border-rectangle-button">
                          <a href="#">Border Button</a>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="filled-rounded-button">
                          <a href="#">Filled Button</a>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="border-rounded-button">
                          <a href="#">Border Button</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->

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
              <p class="copyright">Copyright &copy; 2019 Company Name
              <br>Designed by <a rel="nofollow" href="https://www.facebook.com/templatemo">Template Mo</a></p>
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
