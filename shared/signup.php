<?php 

    $uname = $_POST['uname'];
    $upass = $_POST['upass1'];
    $usertype = $_POST['usertype'];

    // $conn = new mysqli("localhost" , "root" , "" , "project-acme",3306);
    include "../shared/connection.php";
    

    $sql =("INSERT INTO user(username,password,usertype) VALUES ('$uname' , '$upass' ,'$usertype')");

    $status = mysqli_query($conn,$sql);
    if(!$status){
        echo "something went wrong" .mysqli_error($conn);
    }
    else{
        echo "registration successfull";
    }

?>