</head>
<body>

  <!-- *** NAVBAR ***
_________________________________________________________ -->

  <div class="navbar navbar-default navbar-fixed-top yamm" role="navigation" id="navbar">
      <div class="container">
          <div class="navbar-header">

              <a class="navbar-brand home" href="index.php">
                  <img src="img/tri.jpg" alt="Trishul logo" class="hidden-xs hidden-sm"><span class="sr-only">Trishul - go to homepage</span>
              </a>
              <div class="navbar-buttons">
                  <button type="button" class="navbar-toggle btn-primary" data-toggle="collapse" data-target="#navigation">
                      <span class="sr-only">Toggle navigation</span>
                      <i class="fa fa-align-justify"></i>
                  </button>
                  <a class="btn btn-primary navbar-toggle" href="register.html"> </a>
                  <a class="btn btn-primary navbar-toggle" href="basket.php">
                      <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">items in cart</span>
                  </a>
              </div>
          </div>
          <!--/.navbar-header -->

          <div class="navbar-collapse collapse" id="navigation">

              <ul class="nav navbar-nav navbar-left">
                  <li><a href="index.php">Home</a></li>
                 <li><a href="products.php">Products</a></li>
                  <li><a href="donate.php">Donate</a></li>
                  <li><a href="events.php">Events</a></li>
                  <li><a href="contact.php">Contact</a>
                  </li>
              </ul>

          </div>
          <!--/.nav-collapse -->

            <div class="navbar-collapse collapse right" id="basket-overview">
                <a href="basket.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">items <span class="hidden-md">in cart</span></span></a>
            </div>

            <div class="navbar-collapse collapse right" id="basket-overview">
                <a href="register.php" class="btn btn-primary navbar-btn"></i><span class="hidden-sm">
                  <?php
                      session_start();
                      $con=mysqli_connect("localhost","root","","trishul") or die("Unable to connect to MySql");
                      if (!isset($_SESSION['user_name']))
                      {

                        echo 'New Account / Sign In';
                      }
                      else
                      {
                        if($_SESSION["user_name"]=="admin")
                        {
                          header("location: dashboard.php");
                        }
                        echo 'Welcome: '.$_SESSION['user_name'];
                        echo '<a href="logout.php" class="btn btn-primary navbar-btn">Logout</a>';
                      }
                  ?>
                </span></a>
            </div>

            <!--/.nav-collapse -->

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->
