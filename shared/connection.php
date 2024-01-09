<?php 

try{
    $conn = new mysqli("localhost" , "root" , "" , "project-acme",3306);
    if($conn->connect_error){
        echo "connection failed";
        die;
    }
}
catch(Exception $err){
    print_r($err);
}

?>