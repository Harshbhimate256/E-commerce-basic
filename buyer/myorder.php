<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <style>
            body{
                background: #1f2833;
            }
            .card{
                width: 400px;
                height: 450px;
                background-image: linear-gradient( #a2aeb2,#a7b3b7);
                display:inline-block;
                margin:10px;
                padding:10px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s, box-shadow 0.3s;
            }
            .card:hover {
                transform: scale(1.05);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
            img{
                width:60%;
                height:45%;
                margin-bottom:10px;
            }
            .name{
                font-weight:bold;
                font-style:italic;
                font-size:40px;
            }
            .price{
                color:#473E66;
                font-size:25px;
                padding-left:17rem;
                font-weight:bold;
            }
            .para{
                color:#5b6163;
            }

        </style>
    </head>


</html>

<?php 
    // include "../shared/header.html";
    // include "authguard.php";
    // include "menu.html";
include "authwithmenuB.php";

    include "../shared/connection.php";

    $sql_query= "SELECT * FROM orders WHERE userid=$_SESSION[userid]";
    $sql=mysqli_query($conn,$sql_query);
    
    if(!$sql){
        echo mysqli_error($conn);
    }
    else{
        echo "<h2 class='text-center fw-bold mt-2 para'>Your Orders list</h2>";
        while($row = mysqli_fetch_assoc($sql)){
            // print_r($row);
            // echo "<br>";
            echo "<div class='card'>
                <div class='name'>$row[name]</div>
                <div class='price'>$row[price]/-</div>
                <div><img src='$row[imgPath]'></div>
                <div>purchased on <b>$row[created_date]</b></div>
        </div>";
        }
       
    }

?>