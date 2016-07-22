<?php include 'header.php'; ?>
<title>Donate | Trishul</title>
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

<div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">

                        <li><a href="index-2.html">Home</a>
                        </li>
                        <li>Donation</li>
                    </ul>
                </div>

                <div class="col-md-12">
                    <div class="box">
                        <h1>Donation</h1>

                        <p class="lead">Thank you for donation</p>
                        <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                        <form action="/tri/pay.php" method="post">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact No</label>
                                <input type="text" class="form-control" id="contact" required>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea rows="4" cols="50" class="form-control" id="contact" required>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="adonation">Anonymous Donation</label>&nbsp;
                                 <input type="radio" name="adon" value="yes">Yes&nbsp;
                                 <input type="radio" name="adon" value="no">No<br>
                            </div>

                            <div class="form-group">
                                <label for="amount">Amount in USD</label>
                                <input type="number" name="amounting" min=1 class="form-control" id="amount" required>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="cause">Cause</label>&nbsp;
                                <select name="cars">
                                <option value="meal">A meal for everyone</option>
                                <option value="edu">Free education to all</option>
                                </select>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Donate</button>

                            </div>
                        </div>
                        </form>
                    </div>
                </div>




            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER *** -->
        <?php include 'footer.php' ?>
      </div>
        <!-- /#all -->
      </body>
    </html>
