<html lang="en">
<head>
    <style>
        body{
            background: #dfdbd8;
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

$userid = $_SESSION['userid'];
$pid = $_GET['pid'];
include "../shared/connection.php";
$sql_query= "INSERT INTO cart(userid,pid) VALUES ($userid,$pid)";
$sql= mysqli_query($conn,$sql_query);
// function funct_cart($message){
//     echo "<script>alert('$message');</script>";
// }
if($sql){
    echo "<div style='text-align :center; font-size:25px;color:#ee4c7c;'>
            <h2>item added to cart</h2>
    </div>
    <a href='view.php' style='padding-left:52rem;font-size:30px;'>continue shopping</a>
    ";
    
}
else{
    echo mysqli_error($conn);
}

?>