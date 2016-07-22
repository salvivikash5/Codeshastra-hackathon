<?php
    $con=mysqli_connect("localhost","root","","trishul") or die("Unable to connect to MySql");
    $file_ext_p = "";
    $file_ext_f = "";

extract($_POST);
$error=array();
$extension=array("jpeg","jpg","png","gif");
$name=array();
$i=0;
$filename="";
foreach($_FILES["image"]["tmp_name"] as $key=>$tmp_name)
{
    $file_name=$_FILES["image"]["name"][$key];
    $file_tmp=$_FILES["image"]["tmp_name"][$key];
    echo 'filename : '.$file_name.'    ';
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
    if(in_array($ext,$extension))
    {
        if(!file_exists("../uploads/".$file_name))
        {
            move_uploaded_file($file_tmp=$_FILES["image"]["tmp_name"][$key],"../uploads/".$file_name);
        }
        else
        {
            $filename=$file_name.$ext;
        }
    }
    else
    {
        array_push($error,"$file_name, ");
    }

    $name[0]=$file_name;
    $i++;
    echo 'name : '.$name[0].'    ';
}
    $get = "insert into event_details values(NULL,'".$_POST['name']."','".$_POST['description']."','uploads/".$name[0]."');";
    echo $get;
    $result = $con->query($get);
    echo $result;
//(name,description,price,quantity_avail,prod_img,created_at,status)   date("Y/m/d")
   header("location: ../dashboard.php");
?>
