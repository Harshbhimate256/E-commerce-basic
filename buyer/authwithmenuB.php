<!-- I HAVE COMBINED authguard.php and menu.html TO CREATE A SINGLE TASKBAR OR MENU BAR AND GIVEN STYLING  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="auth.css">
</head>
<body>
    <div class="authmenu">
        
    <?php 
    // include "../seller/authguard.php";
    // include "../seller/menu.html";
    


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

if($_SESSION['usertype']!='Buyer'){
    echo "<h1 style='color:black;text-align:center;'>access forbidden!!</h1>";
    die;
}
    echo "<div class='header'>
    <div class='one'>
        <div class='head'><h1 style='font-size:50px;'>The Everything store</h1></div>
        <div style='color:#8b9295; font-size:20px;margin-top:25px;' class='user'>Hello,$_SESSION[username] ($_SESSION[usertype])</div>
    </div>
    <div class='two'>
        <div class='item'>
            <a href='view.php'>Home</a>
        </div>
        <div class='item'>
            <a href='viewcart.php'>View Cart</a>
        </div>
    </div>
    <div class='three' style='border-left:2px solid white;'>
        <div class='item'>
            <a href='myorder.php'>My Orders</a>
        </div>
            <div class='logout'><a href='../shared/logout.php'>LOGOUT</a></div>
    </div>
        
    
</div>";





    ?>
    </div>
</body>
</html>