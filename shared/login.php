<?php 
    session_start();
    $_SESSION['login_status']=false;
    
    // $conn = new mysqli("localhost" , "root" , "" , "project-acme",3306);
    
    include "../shared/connection.php";
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];

    $sql =("SELECT * FROM user WHERE username = '$uname' AND password='$upass'");

    $result = mysqli_query($conn,$sql);
    
    if($result){
    $rows = mysqli_num_rows($result);

    $row=mysqli_fetch_assoc($result);
    if($rows>0){
        $_SESSION['login_status']= true;
        $_SESSION['usertype']= $row['usertype'];
        $_SESSION['username']= $row['username'];
        $_SESSION['userid']= $row['userid'];
        
        if($row){
            echo "LOGIN SUCCESS";
            if($row['usertype']=='Seller'){
                header("location:../seller/home.php");
            }
            else if($row['usertype']=='Buyer'){
                header("location:../buyer/view.php");
            }
        }
        else{
            echo "LOGIN FAILED";
        }
    }
}
    else{
        echo "invalid username or password";
        // echo "error" . mysqli_error($conn);
        exit;

    }
?>