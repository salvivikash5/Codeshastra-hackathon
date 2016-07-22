<?php include 'header.php'; ?>
<title>Register | Trishul</title>
<?php include 'navbar.php' ?>


  
  <div id="all">

      <div id="content">
          <div class="container">

              <div class="col-md-12">
                  <ul class="breadcrumb">

                      <li><a href="index-2.html">Home</a>
                      </li>
                      <li>New account / Sign in</li>
                  </ul>
              </div>

              <div class="col-md-6">
                  <div class="box">
                      <h1>New account</h1>

                      <p class="lead">Not our registered customer yet?</p>

                      <hr>

                      <form action="reg.php" method="post">
                          <div class="form-group">
                              <label for="namer">Name</label>
                              <input type="text" class="form-control" name="name" id="name" required>
                          </div>
                          <div class="form-group">
                              <label for="emailer">Email</label>
                              <input type="email" name="email" class="form-control" id="email" required>
                          </div>
                          <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" class="form-control" name="passd" id="password" required>
                          </div>
                          <div class="form-group">
                              <label for="addresser">Address</label>
                              <textarea class="form-control" name="address" id="address" required></textarea>
                          </div>
                          <div class="form-group">
                              <label for="address">Gender</label>
                              <input type="radio" name="gender" value="m">Male&nbsp;
	                            <input type="radio" name="gender" value="f">Female<br>
                          </div>

                          <div class="form-group">
                              <label for="user_type">Which type of user you are ?   </label>
                              <select id="type_select" name="user_type">
                                <option value="user">Normal user</option>
                                <option value="volunteer">Volunteer</option>
                              </select>
                          </div>
                          <div class="form-group">
                            Date Of Birth:  <input type="date" id="dob" name="dob">
                          </div>
                          <div class="text-center">
                              <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                          </div>
                      </form>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="box">
                      <h1>Login</h1>

                      <p class="lead">Already our customer?</p>
                      <p class="text-muted"></p>

                      <hr>

                      <form action="login.php" method="post">
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="text" name="eail" class="form-control" id="email">
                          </div>
                          <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" name="dpass" class="form-control" id="password">
                          </div>
                          <div class="text-center">
                              <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                          </div>
                      </form>
                  </div>
              </div>


          </div>
      </div>
      <?php include 'footer.php'; ?>
    </div>
  </body>
</html>
