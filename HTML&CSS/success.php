<?php include'common.php';
if (!isset($_SESSION['email'])) {
    header('location:login.php ');}  
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="success.css">
    </head>

    <body>

    <script src="https://kit.fontawesome.com/bb776e841c.js"></script>

    <style>
    <?php
            include '../bootstrap/bootstrap.min.css';
            include 'success.css';?>
    ?>

    </style>


    <?php
        $con = @mysqli_connect("localhost","admin","admin","Store") or die(mysqli_error($con));

        session_start();
        include'common.php';
        $update_query= "UPDATE users_items SET status = 'confirmed'";
        $update_query_result = mysqli_query($con,$update_query) or die(mysqli_error($con));?>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand active" href="index.php">LifeStyle Store</a> 
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item "><a class="nav-link" href="carts.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
                        <li  class="nav-item " ><a class="nav-link" href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
                        <li  class="nav-item"><a class="nav-link" href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>  

        <div class="container">
            <div class="jumbotron">
                    <h1 class="order-title fa fa-clock-o clock-icon" aria-hidden="true"> Order Confirmed</h1>  
                    <h3 class="order-subtext fa5-$">Delivery time: Never</h3>  
                    <br>
                    <p class="order-endtext">Thank you for shopping with us. <a href="products.php"><u>Click here</u></a> to purchase any other item.</p>
            </div>
        </div>

    </body>

    <div class="footer">
            
        <span class="footer-info"> Copyright © Lifestyle Store. All Rights
            Reserved | Contact Us: +91 90000 00000</span>

    </div >
</html>