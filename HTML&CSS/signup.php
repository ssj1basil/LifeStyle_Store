<?php include'common.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');}
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="signup.css">
    </head>

    <body>

    <script src="https://kit.fontawesome.com/bb776e841c.js"></script>


    <style>
    <?php
            include '../bootstrap/bootstrap.min.css';
            include 'custom.css';?>
    </style>


 
    <?php
        include'common.php';?>
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">LifeStyle Store</a> 
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li  class="nav-item active"><a class="nav-link" href="signup.php"><i class="fa fa-user" aria-hidden="true"></i> Sign Up</a></li>
                        <li  class="nav-item"><a class="nav-link" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>  
    
   
        <div class="container container-form">
            <div class="card-body">
            <h1 class="form-title">Sign Up</h1>
            <form action="signup_script.php" method="post">
                <div class="form-group">
                    <input type="text" name="name" class="form-control input-lg" placeholder=" Name">
                </div>
                <div class="form-group">
                        <input type="email" name="email" class="form-control input-lg" placeholder=" Email">
                </div>
                <div class="form-group">
                        <input type="password" name="password" class="form-control input-lg" placeholder=" Password">
                </div>
                <div class="form-group">
                        <input type="text" name="contact" class="form-control input-lg" placeholder=" Contact">
                </div>
                <div class="form-group">
                        <input type="text" name="city" class="form-control input-lg" placeholder=" City">
                </div>
                <div class="form-group">
                        <input type="tel" name="address" class="form-control input-lg"  placeholder="Address">
                </div>
                <div class="form-group">
                    <select class="form-control" name="type">
                        <option value="Buyer">Buyer</option>
                        <option value="Supplier">Supplier</option>
                    </select>
                </div>

            <div class="submit-btn">
                <input type="submit" value="Submit" class="btn btn-primary btn-md" id="Submit"></input>
            </div>
            </form>
        </div>

        </div>
    </body>

        <div class="footer">
                
            <span class="footer-info"> Copyright © Lifestyle Store. All Rights
                    Reserved | Contact Us: +91 90000 00000</span>

        </div >
</html>
