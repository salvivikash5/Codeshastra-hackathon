<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trishul";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=$_GET['id'];
$get = "delete from cart where prod_id=".$id;
echo 'hello';
$result = $conn->query($get);
header('Location: ../basket.php');
 ?>
