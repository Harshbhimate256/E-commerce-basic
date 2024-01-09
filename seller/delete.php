<?php 
include "authguard.php";
include "menu.html";
include "../shared/connection.php";

$pid=$_GET['pid'];

$sql_query="DELETE FROM product WHERE pid=$pid";
$sql=mysqli_query($conn,$sql_query);
if(!$sql){
    echo mysqli_error($conn);
}
else{
    header("location:view.php");
}

?>