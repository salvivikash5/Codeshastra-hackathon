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
              <li>
                  <a href="addEvent.php">Add New Events</a>
              </li>

          </ul>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
        <a href="logout.php" class="btn btn-default" style="float: right;">Logout</a>
        <span style="float: right; padding-top: 0.7%;"><?php session_start(); echo 'Welcome: '.$_SESSION['user_name']; ?></span>
        <h3>Dashboard</h3>
        <ul class="nav nav-tabs">
          <li class="active col-lg-3 col-md-3" style="padding-left: 0px;padding-right: 0px;"><a href="#main_dashboard">Users Dashboard</a></li>
          <li class="col-lg-3 col-md-3" style="padding-left: 0px;padding-right: 0px;"><a href="#product_dashboard">Products Dashboard</a></li>
          <li class="col-lg-3 col-md-3" style="padding-left: 0px;padding-right: 0px;"><a href="#orders">Orders</a></li>
          <li class="col-lg-3 col-md-3" style="padding-left: 0px;padding-right: 0px;"><a href="#event_dashboard">Events</a></li>
        </ul>
        <div class="tab-content">
          <div id="main_dashboard" class="tab-pane fade in active">
            <table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <h3>Users</h3><br />
              <thead>
                  <tr>
                      <th>Customer Name</th>
                      <th>Gender</th>
                      <th>Date of Birth</th>
                      <th>Type of Customer</th>
                  </tr>
              </thead>

              <tbody>
                <?php
                  $result=mysqli_query($con,"SELECT * from user");
                  foreach ($result as $row)
                  {
                ?>
                  <tr>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['gender']; ?></td>
                      <td><?php echo $row['dob']; ?></td>
                      <td><?php echo $row['user_type']; ?></td>
                  </tr>
                  <?php
                  }
                  ?>
              </tbody>
          </table>
        </div>
        <div id="product_dashboard" class="tab-pane fade">
          <table id="example2" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <h3>Products</h3><br />
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Quantity Available</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
              <?php
                $result=mysqli_query($con,"SELECT * from products");
                foreach ($result as $row)
                {
              ?>
                <tr>
                    <td><?php echo $row['product_id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['quantity_avail']; ?></td>
                    <td>
                    <input class="btn btn-default" type="button" id="<?php echo $row['product_id']; ?>" onclick="deleteProd(this.id);" value="Delete">
                      <!--<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>-->
                    </button>
                  </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
      </div>
      <div id="orders" class="tab-pane fade">
        <table id="example3" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <h3>Orders</h3><br />
          <thead>
              <tr>
                  <th>Order ID</th>
                  <th>Username</th>
                  <th>Date</th>
                  <th>Transaction Amount</th>
              </tr>
          </thead>

          <tbody>
            <?php
              $result=mysqli_query($con,"SELECT * from orders");
              foreach ($result as $row)
              {
            ?>
              <tr>
                  <td><?php echo $row['order_id']; ?></td>
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['date']; ?></td>
                  <td><?php echo $row['total_cost']; ?></td>
              </tr>
              <?php
              }
              ?>
          </tbody>
      </table>
    </div>
    <div id="event_dashboard" class="tab-pane fade">
      <table id="example4" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <h3>Events</h3><br />
        <thead>
            <tr>
                <th>Event ID</th>
                <th>Event Name</th>
                <th>Description</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
          <?php
            $result=mysqli_query($con,"SELECT * from event_details");
            foreach ($result as $row)
            {
          ?>
            <tr>
                <td><?php echo $row['event_id']; ?></td>
                <td><?php echo $row['event_name']; ?></td>
                <td><?php echo $row['event_desc']; ?></td>
                <td>
                <input class="btn btn-default" type="button" id="<?php echo $row['event_id']; ?>" onclick="deleteEvent(this.id);" value="Delete">
                  <!--<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>-->
                </button>
              </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
  </div>
    </div>
  </div>
</div>
    <script src="js/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script>
    $(document).ready(function() {
      $('#example1').DataTable();
      $('#example2').DataTable();
      $('#example3').DataTable();
      $('#example4').DataTable();
      $(".nav-tabs a").click(function(){
          $(this).tab('show');
      });
  } );
  function deleteProd(id)
  {
    var datastring='id='+id;
    $.ajax({
      url: "php/deleteProduct.php",
      type: "GET",
      data: datastring,
      cache: false,
      success: function (html)
      {
        $('#example2').load(location+" #example2");
        //location.reload();
      }
    });
  }
  function deleteEvent(id)
  {
    var datastring='id='+id;
    $.ajax({
      url: "php/deleteEvent.php",
      type: "POST",
      data: datastring,
      cache: false,
      success: function (html)
      {
        $('#example4').load(location+" #example4");
        //location.reload();
      }
    });
  }
    </script>
  </body>
</html>
