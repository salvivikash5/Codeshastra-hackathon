<!DOCTYPE html>
<html lang="en">
<?php
  $con=mysqli_connect("localhost","root","","trishul") or die("Unable to connect to MySql");
 ?>
<head>
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <!-- Custom CSS -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div id="wrapper">

      <!-- Sidebar -->
      <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
              <li class="sidebar-brand">
                  <a href="#">
                      <span class="glyphicon glyphicon-home"></span> Trishul
                  </a>
              </li>
              <li  class="active">
                  <a href="dashboard.php">Dashboard</a>
              </li>
              <li>
                  <a href="addprod.php">Add New Products</a>
              </li>
          </ul>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
            <div class="container-fluid">
                <h3>Add New Product</h3><br>
                <form method="post" action="php/publishProduct.php" enctype="multipart/form-data">
                    <div class="col-lg-9 form-group">
                        <input type="text" name="name" placeholder="name" class="form-control" required><br />

                        <textarea name="description"  rows="15" columns="30" class="form-control" placeholder="Product description"></textarea>
                    </div>

                    <div class="col-lg-3">
                      <div class="row">
                        <input type="submit" value="Publish" class="btn btn-default form-control">
                      </div>
                      <br />

                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading">Product's Image</div>
                                <div class="panel-body" id="prodImg">
                                    <input type="file" name="image[]" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  Price
                              </div>
                              <div class="panel-body">
                                  <input type="text" name="price" placeholder="Price" class="form-control" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                              </div>
                          </div>

                        </div>
                        <div class="row">
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  Quantity Available
                              </div>
                              <div class="panel-body">
                                      <input type="text" name="quantity_avail" placeholder="Quantity" class="form-control" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                              </div>
                          </div>
                        </div>


                    </div>

                </div>
            </form>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script>
    </script>
  </body>
</html>
