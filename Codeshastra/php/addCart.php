<?php
    $con=mysqli_connect("localhost","root","","trishul") or die("Unable to connect to MySql");
    session_start();
    //$get = "insert into cart(prod_id,product_name,product_price,product_qty,product_img) values(NULL,'".$_POST['product_name']."','".$_POST['product_price']."','".$_POST['product_qty']."','".$_POST['product_img']."');";
    $get = "insert into cart values('".$_SESSION['user_name']."','".$_POST['product_img']."','".$_POST['product_name']."','".$_POST['product_price']."','".$_POST['product_qty']."','".$_POST['product_id']."');";
    //$get = "insert into cart values(NULL,'".$_POST['name']."','".$_POST['description']."','".$_POST['price']."','".$_POST['quantity_avail']."','uploads/".$name[0]."','2016-01-24','Adnan','0');";
    echo $get;
    $result = $con->query($get);
    //header("location: ../basket.php");
    header('Location: ../basket.php');
?>
