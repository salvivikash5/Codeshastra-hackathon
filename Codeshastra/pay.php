<?php
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='trishul@challengers.com'; // Business email ID
?>
<?php include 'header.php'; ?>
<title>Pay | Trishul</title>
<?php include 'navbar.php' ?>


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

    <!-- *** LOGIN MODAL END *** -->

    <!-- *** SLIDER ***
	_________________________________________________________ -->

    <!-- /#slider -->

    <!-- *** SLIDER END *** -->

    <div id="all">

        <!-- *** ADVANTAGES ***
_________________________________________________________ -->

        <div id="advantages">

            <div class="container">

                <div class="col-md-12">



                </div>


            </div>
            <!-- /.container -->

        </div>
        <!-- /#advantages -->

        <!-- *** ADVANTAGES END *** -->

        <!-- *** CONTENT ***
	    _________________________________________________________
	    _________________________________________________________
	    -->

        <div id="content">
            <div class="container">

                <div class="col-sm-12">


                </div>
                <!-- /.col-sm-12 -->

            </div>
            <!-- /.container -->

            <!-- *** PROMO BAR ***
_________________________________________________________ -->
<div class="product">
	<div class="price">
        <center><?php echo '$'. $_POST["amounting"].' is to be paid';
        	$donation = $_POST["amounting"];?></center>
    </div><div class="btn">
    <form action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">
    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="Trishul Payment">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1"><?php
    echo '<input type="hidden" name="amount" value="'.$donation.'">';?>
    <input type="hidden" name="cpp_header_image">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="http://localhost/codeshastra/cancel.php">
    <input type="hidden" name="return" value="http://localhost/codeshastra/done.php">
    <center><input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"><center>
    </form>
    </div>
</div>

        </div>
        <!-- /#content -->



        <?php include 'footer.php'; ?>


    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/front.js"></script>



    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-1563729-14', 'ondrejsvestka.cz');
        ga('send', 'pageview');
    </script>

</body>
</html>
