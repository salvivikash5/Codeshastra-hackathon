<div class="navbar navbar-default navbar-fixed-top yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index-2.html">
                    <img src="img/tri.jpg" alt="Minimal logo" class="hidden-xs hidden-sm">
                    <img src="img/tri.jpg" alt="Minimal logo" class="visible-xs visible-sm"><span class="sr-only">Minimal - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle btn-primary" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <a class="btn btn-primary navbar-toggle" href="basket.html">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>
                    <button type="button" class="navbar-toggle btn-default" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <button type="button" class="navbar-toggle btn-default" data-toggle="modal" data-target="#login-modal">
                        <span class="sr-only">User login</span>
                        <i class="fa fa-users"></i>
                    </button>

                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="/index.php">Home</a></li>
                   <li><a href="/products.php">Products</a></li>
                    <li><a href="/donate.php">Donate</a></li>
                    <li><a href="/events.php">Events</a></li>
                    <li><a href="contact.html">Contact</a>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-collapse collapse right" id="basket-overview">
                <a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"><?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "trishul";
                            $conn = new mysqli($servername, $username, $password,$dbname);
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            } 
                            $get = "select quantity from order_details";
                            $result = $conn->query($get);
                            if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                            echo ''.$row["quantity"];
                            }
                        }
                        ?> items <span class="hidden-md">in cart</span></span></a>
            </div>
            <!--/.nav-collapse -->

           

            <div class="navbar-collapse collapse right">
                <button type="button" class="btn navbar-btn btn-default" data-toggle="modal" data-target="#login-modal">
                    <span class="sr-only">User login</span>
                    <i class="fa fa-users"></i>
                </button>
            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

            </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>


    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog modal-sm">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="Login">Customer login</h4>
                </div>
                <div class="modal-body">
                    <form action="http://minimal.ondrejsvestka.cz/1-3-3/customer-orders.html" method="post">
                        <div class="form-group">
                            <input type="text" name="user_name" class="form-control" id="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="password" placeholder="password">
                        </div>

                        <p class="text-center">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-sign-in"></i> Log in</button>
                        </p>
                    </form>

                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute !</p>

                </div>
            </div>
        </div>
    </div>