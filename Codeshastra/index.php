<?php include 'header.php'; ?>
<title>Homepage | Trishul</title>
<?php include 'navbar.php' ?>

<!-- CONTENT -->

    <div id="content">
        <div class="container">

            <div class="col-sm-12">

                <div class="box text-center">
                    <h3 class="text-uppercase">Events conducted</h3>

                </div>
            </div>
        </div>
      </div>




    <!-- *** SLIDER ***
	_________________________________________________________ -->

    <div id="slider" class="owl-carousel owl-theme">

        <div class="item">
            <a href="#">
                <img src="img/event3.jpg" alt="" class="img-responsive">
            </a>
        </div>

        <div class="item">
            <a href="#">
                <img src="img/event4.jpg" alt="" class="img-responsive">
            </a>
        </div>

        <div class="item">
            <a href="#">
                <img src="img/event1.jpg" alt="" class="img-responsive">
            </a>
        </div>

        <div class="item">
            <a href="#">
                <img src="img/event2.jpg" alt="" class="   img-responsive">
            </a>
        </div>

        <div class="item">
            <a href="#">
                <img src="img/event5.jpg" alt="" class="img-responsive">
            </a>
        </div>

        <div class="item">
            <a href="#">
                <img src="img/vol.jpg" alt="" class="img-responsive">
            </a>
        </div>


    </div>
    <!-- /#slider -->

    <!-- *** SLIDER END *** -->

    <?php include 'footer.php' ?>


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
