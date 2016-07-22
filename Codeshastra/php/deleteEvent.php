<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trishul";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=$_POST['id'];
$get = "delete from event_details where event_id=".$id;
//echo 'hello';
$result = $conn->query($get);
//header('Location: ../dashboard.php');
 ?>
