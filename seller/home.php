<?php
    // include "../shared/header.html";
    // include "authguard.php";
    // include "menu.html";
    include "authwithmenu.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home-seller</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body{
                background: #dfdbd8;
            }
            .title{
                background: -webkit-linear-gradient(#afafad, #45a29e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    <form action="upload.php" method="POST" class="w-50 p-4" style="border-radius: 30px;background-image: linear-gradient( #cac8c6,#d1cecc);" enctype="multipart/form-data"> 
    <h2 style='color:white;font-weight:bold;' class='text-center title'>Upload Product</h2>
        <input required type="text" placeholder="Product name" class="form-control mt-2" style="background:transparent;" name="name"> 

        <input required type="number" placeholder="Product price" class="form-control mt-2" style="background:transparent;" name="price">

        <textarea required name="detail" cols="30" rows="5" class="form-control mt-2" style="background:transparent;" placeholder="product description"></textarea> 

        <input name="pdtimg" required type="file" style="background:transparent;" class="form-control mt-2">
        <div class="text-center mt-3">
            <button style="border:none; border-radius:10px; font-size:20px;background-image: linear-gradient( #b6b5b3,#afafad);">Upload</button>
        </div>
    </form>
    </div>
</body>
</html>