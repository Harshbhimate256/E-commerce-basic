
<html lang="en">
<head>
    <style>
        .header{
            display:flex;
            justify-content:space-around;
            background-image: linear-gradient(#6f2232, #950740);
            padding:10px;
            font-weight:bold;
            border-radius:10px;
        }
        .logout a{
            text-decoration:none;
            color:black;
        }
        .logout button{
            background-image: linear-gradient(#950740, #c3073f);    
            border-radius:10px;
            font-size:20px;
            border:none;
            transition:  0.6s;
        }
        .logout button:hover{
            transition: .8s;
            color:white;
            
        }
    </style>
</head>
<body>
</body>
</html>


<?php
session_start();

if(!isset($_SESSION['login_status'])){
    echo "<h1>Please login to access the contents</h1>";
    echo "<a href='../shared/login.html'>Login here</a>";
    die;
}
if($_SESSION['login_status']==false){
    echo "<h1>login with proper credentials</h1>";
    echo "<a href='../shared/login.html'>Login here</a>";
    die;
}

if($_SESSION['usertype']!='Seller'){
    echo "access forbidden!!";
    die;
}
    echo "<div class='header'>
    <div style='color:black; font-size:20px;'>Hello,$_SESSION[username]</div>
    <div style='color:black; font-size:20px;'>User-type:-$_SESSION[usertype]</div>
    <div class='logout'><a href='../shared/logout.php'><button>Logout</button></a></div>
    
    </div>";
?>