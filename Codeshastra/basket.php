<?php include 'header.php'; ?>
<title>Cart | Trishul</title>
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
                    <p class="text-center text-muted"><a href="register.php"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

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

                        <li><a href="index-2.html">Home</a>
                        </li>
                        <li>Shopping cart</li>
                    </ul>
                    <?php
                			$servername = "localhost";
                			$username = "root";
                			$password = "";
                			$dbname = "trishul";
                			$tc=NULL;$i=1;
                			$conn = new mysqli($servername, $username, $password,$dbname);
                			if ($conn->connect_error) {
                    		die("Connection failed: " . $conn->connect_error);
                			}
                      $get = "select * from cart where user_name like '".$_SESSION['user_name']."';";
                      $result = $conn->query($get);
                      ?>

                    <div class="box text-center">

                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <h1>Shopping cart</h1>
                                <p class="text-muted">You currently have <?php echo $result->num_rows; ?> item(s) in your cart.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-9 clearfix" id="basket">

                    <div class="box">

                        <form method="post" action="pay.php">

                            <div class="table-responsive" id="cartTable">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit price</th>
                                            <th colspan="2">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                			if($result->num_rows > 0){
                                				while($row = $result->fetch_assoc()){
                                      ?>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="<?php echo $row["product_img"];?>" alt="<?php echo $row["product_img"];?>">
                                                </a>
                                            </td>
                                            <td><a href="#"><?php echo $row["product_name"];?></a>
                                            </td>
                                            <td>
                                                <input type="number" min=1 max=10 maxlength="2" value="<?php echo $row["product_qty"];?>" name="qty[]" class="form-control" style="width: 55px;">
                                                <input type="hidden" value="<?php echo $row["prod_id"];?>"  name="prod_id[]">
                                            </td>
                                            <td><?php echo $row["product_price"];?></td>
                                            <td><?php echo ($row["product_price"]*$row["product_qty"]); ?></td>
                                            <td><a href="php/deleteCart.php?id=<?php echo $row['prod_id']; ?>" id="<?php echo $row['prod_id']; ?>" onclick="deleteProd(this.id);"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                      <?php
                                      $tc=$tc+$row["product_price"]*$row["product_qty"];
                            					$i++;
                                        }
                                      }
                                      ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">Rs.<?php echo $tc;?></th>
                                            <input type="hidden" name="amounting" value="<?php echo round($tc/65,2);?>">
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="products.php" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">
                                    <!--<button class="btn btn-default"  onclick="updateCart()"><i class="fa fa-refresh"></i> Update cart</button>
                                    <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i></button>-->
                                    <input type="button" class="btn btn-default"  onclick="updateCart()" value="&#xf021; Update cart" style="font-family: FontAwesome,Montserrat,Helvetica,Arial,sans-serif;">
                                    <input type="submit" class="btn btn-primary"  value="Proceed to checkout &#xf054;" style="font-family: FontAwesome,Montserrat,Helvetica,Arial,sans-serif;">
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->



                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                        <div class="table-responsive" id="orderTable">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th>Rs.<?php echo $tc;?></th>
                                    </tr>
                                    <tr>
                                        <td>USD</td>
                                        <th>$<?php echo round($tc/65,2);?></th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>Rs.<?php echo $tc;?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>




                </div>
                <!-- /.col-md-3 -->

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

        /*$.ajax({
          url: "php/deleteProduct.php",
          type: "POST",
          data: datastring,
          cache: false,
          success: function (html)
          {
            location.reload();
            //("hello");
          }
        });*/
        function updateCart()
        {
          var quantities;
          var product_ids;
          $(function(){
            quantities = $('input[name="qty[]"]').map(function(){
              return $(this).val();
            }).get();
          });
          $(function(){
            product_ids = $('input[name="prod_id[]"]').map(function(){
              return $(this).val();
            }).get();
          });
          var dataString = 'product_ids='+ product_ids +'&quantities='+quantities;
          $.ajax({
            type: "POST",
            url: "php/updateCart.php",
            data: dataString,
            cache: false,
            success: function(html){
              $('#cartTable').load(location+" #cartTable");
              $('#orderTable').load(location+" #orderTable");
            },
            error: function (xhr, status) {
              alert("Sorry, there was a problem!");
            },
            /*success: function(html)
            {
              //window.location.reload();
              //window.alert("Cart updated successfully");

            }*/
          });
        }
    </script>

</body>


<!-- Mirrored from minimal.ondrejsvestka.cz/1-3-3/basket.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jan 2016 14:59:25 GMT -->
</html>
