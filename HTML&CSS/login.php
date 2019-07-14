<?php include'common.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');}
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

    <body>

    <style>
    <?php
            include '../bootstrap/bootstrap.min.css';
            include 'login.css';?>
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
                        <li  class="nav-item"><a class="nav-link" href="signup.php"><i class="fa fa-user" aria-hidden="true"></i> Sign Up</a></li>
                        <li  class="nav-item active"><a class="nav-link" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>  
  
        <div class="container Login">
            <div class="card bg-primary">
                <div class="card-header">Login</div>
                <div class="card-body bg-white">
                    <p class="text-warning card-title">Login to make a purchase</p>
                    <form action="login_submit.php" method="post">
                        <div class="form-group">
                            <label for="emailinput">Email Address :</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">                        
                        </div>

                    <br>
                    <input type="submit" value="Submit" class="btn btn-md btn-block btn-outline-primary" id="submit"></input>
                    </form>
                </div>
                <div class="card-footer bg-primary">
                    <a href="signup.php" class="text-dark">Don't have an account? Register</a>
                </div>
            </div>
        </div>
    </body>

        <div class="footer">
            <span class="footer-info"> Copyright © Lifestyle Store. All Rights
                    Reserved | Contact Us: +91 90000 00000</span>
        </div>

    
    <script src="https://kit.fontawesome.com/bb776e841c.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</html>
