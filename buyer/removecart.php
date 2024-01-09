<?php 

    // include "authguard.php";
    // include "menu.html";
    include "authwithmenuB.php";

    include "../shared/connection.php";

    $cartid= $_GET['cartid'];

    $sql_query = "DELETE FROM cart WHERE cart_id=$cartid";
    $sql = mysqli_query($conn,$sql_query);
    if($sql){
        echo "item removed from cart";
        header("location:viewcart.php");
    }



?>