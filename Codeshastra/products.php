<?php include 'header.php'; ?>
<title>Products | Trishul</title>
<?php include 'navbar.php' ?>

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
                            <input type="text" class="form-control" id="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="password">
                        </div>

                        <p class="text-center">
                            <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                        </p>

                    </form>

                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                </div>
            </div>
        </div>
    </div>

    <!-- *** LOGIN MODAL END *** -->


    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">

                        <li><a href="#">Home</a>
                        </li>
                        <li>Products</li>
                    </ul>
                    <div class="row">
                        <div class="box text-center">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <h1>Products</h1>
                                    <p class="text-muted">In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide. Pellentesque habitant morbi tristique senectus et netuss.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>



                <div class="row products">

                    <?php
                    $i=1;
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "trishul";
                    $tc=NULL;$i=1;
                    $conn = new mysqli($servername, $username, $password,$dbname);
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    $get = "select * from products";
                    $result = $conn->query($get);
                    if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    echo '<div class="col-md-3 col-sm-4">
                        <div class="product">
                            <div class="image">
                                <a href="#">';
                    echo '<img src="'.$row["prod_img"].'" alt="" class="img-responsive image1">
                                </a>';
                    echo '<div class="quick-view-button">
                                    <a href="#" data-toggle="modal" data-target="#product-quick-view-modal'.$i.'" class="btn btn-default btn-sm">Quick view</a>
                                </div>
                            </div>
                            <!-- /.image -->
                            <div class="text">
                                <h3><a href="#">'.$row["name"].'</a></h3>';
                    echo '<p class="price">Rs '.$row["price"].'</p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>';
                    echo '<div class="modal fade" id="product-quick-view-modal'.$i.'" tabindex="-1" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body" id="'.$row["product_id"].'">

                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                    <div class="row quick-view product-main">
                                        <div class="col-sm-6">
                                            <div class="quick-view-main-image">
                                                <img src="'.$row["prod_img"].'" alt="" class="img-responsive">
                                                <input type="hidden" id="prod_img" value="'.$row["prod_img"].'">
                                            </div>


                                            <!-- /.ribbon -->

                                            <div class="row thumbs">
                                                <div class="col-xs-4">
                                                    <a href="img/detailbig1.jpg" class="thumb">
                                                        <img src='.$row["prod_img"].' alt="" class="img-responsive">
                                                    </a>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-sm-6">

                                            <h2>'.$row["name"].'</h2>
                                            <input type="hidden" id="name" value="'.$row["name"].'">

                                            <p class="text-muted text-small text-center">'.$row["description"].'</p>

                                            <div class="box">

                                                <form>

                                                    <p class="price">'.$row["price"].'</p>
                                                    <input type="hidden" id="price" value="'.$row["price"].'">

                                                    <p class="text-center">
                                                        <input type="text" maxlength=2 max=10 min=1 value=1 id="product_qty" style="width: 40px; height: 31px; text-align:center;" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                                        <button type="submit" id="'.$row["product_id"].'" class="btn btn-primary" onclick="addCart(this)" href="basket.php"><a href="basket.php"><i class="fa fa-shopping-cart"></i>Add to cart</a></button>
                                                        </button>
                                                    </p>


                                                </form>
                                            </div>
                                            <!-- /.box -->


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.modal-dialog-->
                    </div>';
                    $i++;
                }
            }
            ?>

                    <!-- /.modal -->

                </div>
                <!-- /.products -->


                <!-- /.col-sm-12 -->

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

        function addCart(obj)
        {
          var ID = obj.id;
          var prod_img=$("#"+ID+" #prod_img").val();
          var product_name=$("#"+ID+" #name").val();
          var product_price=$("#"+ID+" #price").val();
          var product_qty=$("#"+ID+" #product_qty").val();
          //php/addCart.php?product_name=Greeting Card&product_price=34&product_img=uploads/greetingcard.JPG&product_qty=1
          var dataString = 'product_img='+ prod_img +'&product_name='+ product_name +'&product_price='+product_price+'&product_qty='+product_qty+'&product_id='+ID;
          $.ajax({
            type: "POST",
            url: "php/addCart.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
              //window.alert('success');
              //window.location("basket.php");
            }
          });
        }


    </script>

</body>


<!-- Mirrored from minimal.ondrejsvestka.cz/1-3-3/category-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jan 2016 14:59:34 GMT -->
</html>
