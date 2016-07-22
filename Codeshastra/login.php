
<?php
$con=mysqli_connect("localhost","root","","trishul") or die("Unable to connect to MySql");
$get = "select * from user  where email like '".$_POST["eail"]."' AND password like '".$_POST["dpass"]."'";
//echo $get;
$result = $con->query($get);
if($result->num_rows>0)
{
  session_start();
  $getUser = "select name from user  where email like '".$_POST["eail"]."' AND password like '".$_POST["dpass"]."'";
  $result = $con->query($getUser);
  foreach($result as $row)
  {
    $_SESSION['user_name']=$row['name'];
    $get="insert into login values('".$row['name']."')";
    $re= $con->query($get);
  }

  header("location: index.php");
}
else {
  header("location: errorlogin.php");
}
//header("location: index.php");
?>
