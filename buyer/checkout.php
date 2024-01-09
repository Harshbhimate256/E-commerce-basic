<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background: #1f2833;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php 
    // include "../shared/header.html";
    // include "authguard.php";
include "authwithmenuB.php";

    include "../shared/connection.php";

    $pid= $_GET['pid'];
    $name = $_GET['name'];
    $price = $_GET['price'];
    $detail = $_GET['detail'];
    $imgPath = $_GET['imgPath'];
    $owner= $_GET['owner'];
    $cart_id=$_GET['cartid'];

    $sql_query1="INSERT INTO orders(userid,pid,name,price,detail,imgPath,owner) VALUES ($_SESSION[userid],$pid,'$name',$price,'$detail','$imgPath',$owner)";
    $sql1=mysqli_query($conn,$sql_query1);

    if($sql1){
        echo "<div style='text-align :center; font-size:25px;color:#ee4c7c;'>
        <h2>product Purchase successfull</h2>
        </div>
        <a href='view.php' style='padding-left:52rem;font-size:30px;'>continue...</a>";

        $sql_query2="DELETE FROM cart WHERE cart_id=$cart_id";
        $sql2=mysqli_query($conn,$sql_query2);
        if(!$sql2){
            echo mysqli_error($conn);
        }

    }
    else{
        echo mysqli_error($conn);
    }


?>