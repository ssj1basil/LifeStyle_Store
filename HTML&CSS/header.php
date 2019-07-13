<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="header.css">
    </head>

    <body>
    
    <script src="https://kit.fontawesome.com/bb776e841c.js"></script>

    <style>
        <?php
            include '../bootstrap/bootstrap.min.css';
            include 'header.css';?>
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">LifeStyle Store</a> 
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                        <?php
                        if (isset($_SESSION['email'])) {
                        ?>
                            <li class="nav-item"><a class="nav-link" href = "cart.php"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> Cart </a></li>
                            <li class="nav-item"><a class="nav-link" href = "settings.php"><span><i class="fa fa-cog" aria-hidden="true"></i></span> Settings</a></li>
                            <li class="nav-item"><a class="nav-link" href = "logout_script.php"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span> Logout</a></li>
                
                        <?php
                        } else {
                        ?>
                        <li class="nav-item"><a class="nav-link" href="signup.php"><span><i class="fa fa-user" aria-hidden="true"></i></span> Sign Up</a></li>
                        <li class="nav-item"><a  class="nav-link" href="login.php"><span><i class="fa fa-sign-in" aria-hidden="true"></i></span>Login</a></li>
                        <?php
                        }
                        ?>
                </ul>
            </div>
        </div>
    </nav>  

    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>