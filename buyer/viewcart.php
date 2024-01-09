<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <style>
            body{
                background: #dfdbd8;
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
            .operation{
                text-align:center;
            }
            .detail{
                font-weight:bold;
            }
            .operation a{
                padding-left:18px;
                text-decoration:none;
                
            }
            .total{
                color:#5b6163;
                text-align:center;
            }
            .btns{
                font-size:20px;
                border:none;
                border-radius:10px;
                background-image: linear-gradient( #818a8d,#868f92);
                transition:0.8s;
            }
            .btns:hover{
                transition: 0.4s;
                color:#565c5e;
                background-image: linear-gradient(#727b7e, #778083);
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


$sql_query = "SELECT * FROM cart as c JOIN product as p ON c.pid=p.pid WHERE userid=$_SESSION[userid]";
$sql = mysqli_query($conn,$sql_query);
$total=0;
while($row=mysqli_fetch_assoc($sql)){
    $total+=$row['price'];
    echo "<div class='card'>
                <div class='name'>$row[name]</div>
                <div class='price'>$row[price]/-</div>
                <div class='detail'>$row[detail]</div>
                <div><img src='$row[imgPath]'></div>
                <div class='operation'>
                    <a href='removecart.php?cartid=$row[cart_id]'>
                    <button class='btns'>Remove from cart</button>
                    </a>
                    <a href='checkout.php?pid=$row[pid]&name=$row[name]&price=$row[price]&detail=$row[detail]&imgPath=$row[imgPath]&owner=$row[owner]&cartid=$row[cart_id]'>
                    <button class='btns'>Place Order</button>
                    </a>
                </div>
        </div>";
}
echo "<hr>";
if($total>0){
    echo "<div class='total '>
        <h1>Total Amount: $total/- </h1>
    </div>";
}
else{
    echo "<h2 class='text-center fw-bold' style='color:#5b6163  ;'>Cart is Empty</h2>";
}


?>