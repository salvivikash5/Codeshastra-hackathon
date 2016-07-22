<?php include 'header.php'; ?>
<title>Contact | Trishul</title>
<?php include 'navbar.php' ?>


    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">

                        <li><a href="#">Home</a>
                        </li>
                        <li>Contact</li>
                    </ul>



                    <div class="box text-center">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <h1>Contact</h1>

                                <p class="lead"><strong>Do you have any questions about our products?</strong></p>
                                <p>Please feel free to contact us for any queries.</p>

                            </div>
                        </div>
                    </div>

                    <hr>
                    <h2 class='text-center'>Contact form</h2>

                    <form>
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" class="form-control" id="lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea id="message" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                                    <br><br><br><br>

                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </form>


                    <div class="box" id="contact">
                        <div class="row">
                            <div class="col-sm-4">
                                <h3><i class="fa fa-map-marker"></i> Address</h3>
                                <p>602, Gods Gift Tower,
                                    <br>Yari Road Cross Lane,
                                    <br>Andheri West,
                                    <br>Mumbai - 400061,
                                    <br>Near Versova Sea Breeze
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-phone"></i> Telephonic support</h3>
                                <p class="text-muted"></p>
                                </p>

                                <p>President (Lopamudra) - <br><strong>9821694994 <br> <a href="mailto:lopa@trishul-ngo.org">lopa@trishul-ngo.org</a></strong>
                                    <br><br>General Secretary & CEO (M. Asif)  - <br><strong>9819983722</strong> <br> <strong>9619182010 <br> <a href="mailto:asif@trishul-ngo.org">asif@trishul-ngo.org</a></strong>
                                    <br><br>Treasurer (Pompa Mehrotra) - <br><strong>9820051603 <br> <a href="mailto:pompa@trishul-ngo.org">pompa@trishul-ngo.org</a></strong>
                                </p>


                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                <p class="text-muted">Please feel free to write an email to us.</p>
                                <ul>
                                    <li><strong><a href="mailto:info@trishul-ngo.org">info@trishul-ngo.org</a></strong></li>
                                    <li> Website: <strong><br><a href ="http://www.trishul-ngo.org/">http://www.trishul-ngo.org/</a></strong></li>
                                    <li> Facebook: <strong><br><a href ="http://www.facebook.com/Trishul.ngo">http://www.facebook.com/Trishul.ngo</a></strong></li>
                                </ul>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row -->



                    </div>
                    <!-- /#contact -->
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


            <?php include 'footer.php' ?>

          </div>
            <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/front.js"></script>



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
