<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trishul";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=explode(',', $_POST['product_ids']);
$qty=explode(',', $_POST['quantities']);
echo $id[0];
echo $qty[0];
for($i=0;$i<count($id);$i++)
{
  $get = "update cart set product_qty='".$qty[$i]."' where prod_id='".$id[$i]."';";
  $result = $conn->query($get);
}
?>
