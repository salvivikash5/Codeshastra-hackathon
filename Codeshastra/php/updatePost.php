<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trishul";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$qty=$_POST['qty'];
$id=$_POST['id'];
$get = "update cart set product_qty='".$qty."' prod_id=".$id;
echo 'hello';
$result = $conn->query($get);
//header('Location: ../dashboard.php');
 ?>
