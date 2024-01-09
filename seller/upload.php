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
// print_r($_POST);
// print_r($_FILES['pdtimg']['tmp_name']);

$src_path=$_FILES['pdtimg']['tmp_name'];
$target_path ="../shared/images/" . $_FILES['pdtimg']['name']; //the current folder is the target path

move_uploaded_file($src_path,$target_path);
// include "../shared/header.html";
// include "authguard.php";
include "authwithmenu.php";
include "../shared/connection.php";

$sql_query = "INSERT INTO product(name,price,detail,imgPath,owner) VALUES ('$_POST[name]',$_POST[price],'$_POST[detail]','$target_path',$_SESSION[userid])";
$sql = mysqli_query($conn,$sql_query);

// function funct_alert($message){
//     echo "<script>alert('$message');</script>";
// }

if($sql){
    echo "<div style='text-align :center; font-size:25px;color:#ee4c7c;'>
                <h2>product uploaded successfully</h2>
     </div>
     <a href='view.php' style='padding-left:52rem;font-size:30px;'>continue...</a>";
}
else{
    echo mysqli_error($conn);
}



?>