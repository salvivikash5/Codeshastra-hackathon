<!DOCTYPE HTML>
<head>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <form action="updatePost.php" method="post" name="myForm">
        <thead>
            <tr>
            	<th>Product Image</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Total Cost</th>
            </tr>
        </thead>
          <tbody>
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
			$get = "select * from cart";
			$result = $conn->query($get);
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
      ?>
					<tr><td><img src='img\img2.jpg' class='img-responsive' style='width: 80px; height: 80px;'></td>
					<td><?php echo $row["product_name"];?></td>
					<td><?php echo $row["product_price"];?></td>
          <td>
            <select name='qty' id='qty'>
              <option value='1' <?php if($row["product_qty"] =='1') echo 'selected'; ?>>1</option>
              <option value='2' <?php if($row["product_qty"] =='2') echo 'selected'; ?>>2</option>
              <option value='3' <?php if($row["product_qty"]=='3') echo 'selected'; ?>>3</option>
              <option value='4' <?php if($row["product_qty"]=='4') echo 'selected'; ?>>4</option>
            </select>
            <input type="button" value="Update" onclick="changeqty(this.id);" id="<?php echo $row["prod_id"];?>">
          </td>

          <td><?php echo ($row["product_price"]*$row["product_qty"]); ?></td></tr>
        <?php
					$tc=$tc+$row["product_price"]*$row["product_qty"];
					$i++;
				}
			}
			?>
      </form>
		</tbody>
        <tfoot>
        		<th>Product Image</th>
        		<th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th><?php
                	echo "<label id='total_cost'>".$tc."</label> Rs";
                	?>
                </th>
         </tfoot>

    </table>
    <script src="js/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script>
    $(document).ready(function(){
      $('#example').DataTable();
    });

    </script>
    <script type="text/javascript">
        function changeqty(id)
        {
          var e = document.getElementById("qty");
          var datastring='id='+id+'&qty='+e.options[e.selectedIndex].text;
          $.ajax({
            url: "updatePost.php",
            type: "POST",
            data: datastring,
            cache: false,
            success: function (html)
            {
              location.reload();
              //("hello");
            }
          });
        }
</script>
  </body>
</html>
