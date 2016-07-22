<?php
$con=mysqli_connect("localhost","root","","trishul") or die("Unable to connect to MySql");
$get = "insert into user values(NULL,'".$_POST['name']."','".$_POST['address']."','".$_POST['gender']."','2016-01-24','2016-01-24','2016-01-24','".$_POST['user_type']."','".$_POST['email']."','".$_POST['passd']."');";
echo $get;
$result = $con->query($get);
session_start();
$_SESSION['user_name']=$_POST['name'];
if($_SESSION["user_name"]=="admin")
{
  header("location: dashboard.php");
}
else {
  header("location: index.php");
}
header("location: index.php");
?>
