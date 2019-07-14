<?php include'common.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="products.css">
    </head>

    <body>

    <script src="https://kit.fontawesome.com/bb776e841c.js"></script>


    <style>
    <?php
            include '../bootstrap/bootstrap.min.css';
            include 'products.css';?>

    </style>

    <?php
        session_start();
        include'header.php';?>
    <?php
        session_start();
        include 'check_if_added.php';?>
        
        
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-5">Welcome to Our LifeStyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around. We have it all in one place.</p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row cameras">
                <div class="card col-md-2 col-sm-6 text-center">
                    <img class="card-img-top" src="../Images/2.jpg" alt="Camera Image">
                    <div class="card-body">
                        <h5 class="card-title">NIKON DSLR</h5>
                        <p class="card-text">Price Rs.400000.00</p>
                        <?php
                        session_start();
                        if( !isset($_SESSION['email']))
                        {?>
                        <a href="login.php" class="btn btn-primary btn-block" >Add to cart</a>
                        <?php
                        }else{
                            if(checkitems(2))   
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                            }
                        }
                        ?>                       
                    </div>
                </div>

                <div class="card col-md-2 col-sm-6 text-center">
                    <img class="card-img-top" src="../Images/3.jpg" alt="Camera Image">
                    <div class="card-body">
                        <h5 class="card-title">Sony DSLR</h5>
                        <p class="card-text">Price Rs.500000.00</p>
                        <?php
                        session_start();
                        if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                        <?php
                        }else{
                            if(checkitems(3))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                            }
                        }
                        ?> 
                    </div>
                </div>

                <div class="card col-md-2 col-sm-6 text-center">
                    <img class="card-img-top" src="../Images/4.jpg" alt="Camera Image">
                    <div class="card-body">
                        <h5 class="card-title">Olympus DSLR</h5>
                        <p class="card-text">Price Rs.850000.00</p>
                        <?php
                        session_start();
                        if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                        <?php
                        }else{
                            if(checkitems(4))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                            }
                        }
                        ?> 
                    </div>
                </div>

                <div class="card col-md-2  col-sm-6 text-center">
                    <img class="card-img-top" src="../Images/5.jpg" alt="Camera Image">
                    <div class="card-body">
                        <h5 class="card-title">Canon EOS</h5>
                        <p class="card-text">Price Rs.450000.00</p>
                        <?php
                        session_start();
                        if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                        <?php
                        }else{
                            if(checkitems(1))
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                            }
                        }
                        ?> 
                        </div>
                </div>
            </div>   

            <div class="row watches">
                    <div class="card col-md-2 col-sm-6 text-center">
                        <img class="card-img-top" src="../Images/9.jpg" alt="Watch Image">
                        <div class="card-body">
                            <h5 class="card-title">Titan Model #301</h5>
                            <p class="card-text">Price Rs.130000.00</p>
                            <?php
                            session_start();
                            if(!isset($_SESSION['email']))
                            {?>
                            <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                            <?php
                            }else{
                                if(checkitems(5))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php 
                                }
                        }
                        ?> 
                            </div>
                    </div>
    
                    <div class="card col-md-2 col-sm-6 text-center">
                        <img class="card-img-top" src="../Images/10.jpg" alt="Watch Image">
                        <div class="card-body">
                            <h5 class="card-title">Titan Model #201</h5>
                            <p class="card-text">Price Rs.3000.00</p>
                            <?php
                                session_start();
                                if(!isset($_SESSION['email']))
                                {?>
                                <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                                <?php
                                }else{
                                    if(checkitems(6))
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else{?>
                                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php 
                                    }
                        }
                        ?> 
                            </div>
                    </div>
    
                    <div class="card col-md-2 col-sm-6 text-center">
                        <img class="card-img-top" src="../Images/11.jpg" alt="Watch Image">
                        <div class="card-body">
                            <h5 class="card-title">HMT Milan</h5>
                            <p class="card-text">Price Rs.80000.00</p>
                            <?php
                            session_start();
                            if(!isset($_SESSION['email']))
                            {?>
                            <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                            <?php
                            }else{
                                if(checkitems(7))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php 
                                }
                        }
                        ?> 

                            </div>
                    </div>
    
                    <div class="card col-md-2  col-sm-6 text-center">
                        <img class="card-img-top" src="../Images/12.jpg" alt="Watch Image">
                        <div class="card-body">
                            <h5 class="card-title">Faber Luba #111</h5>
                            <p class="card-text">Price Rs.180000.00</p>
                            <?php
                            session_start();
                            if(!isset($_SESSION['email']))
                            {?>
                            <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                            <?php
                            }else{
                                if(checkitems(8))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php 
                                }
                        }
                        ?> 
                            </div>
                    </div>
                </div>

                <div class="row shirts">
                        <div class="card col-md-2 col-sm-6 text-center">
                            <img class="card-img-top" src="../Images/6.jpg" alt="Shirt Image">
                            <div class="card-body">
                                <h5 class="card-title">Luis Phil</h5>
                                <p class="card-text">Price Rs.1000.00</p>
                                <?php
                                session_start();
                                if(!isset($_SESSION['email']))
                                {?>
                                <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                                <?php
                                }else{
                                    if(checkitems(10))
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else{?>
                                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php 
                                    }
                        }
                        ?> 
                                </div>
                        </div>
        
                        <div class="card col-md-2 col-sm-6 text-center">
                            <img class="card-img-top" src="../Images/8.jpg" alt="Shirt Image" style="padding: 5% 0;">
                            <div class="card-body">
                                <h5 class="card-title">H&W</h5>
                                <p class="card-text">Price Rs.800.00</p>
                                <?php
                            session_start();
                            if(!isset($_SESSION['email']))
                            {?>
                            <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                            <?php
                            }else{
                                if(checkitems(9))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php 
                                }
                        }
                        ?> 

                                </div>
                        </div>
        
                        <div class="card col-md-2 col-sm-6 text-center">
                            <img class="card-img-top" src="../Images/13.jpg" alt="Shirt Image">
                            <div class="card-body">
                                <h5 class="card-title">John Zok</h5>
                                <p class="card-text">Price Rs.1500.00</p>

                                <?php
                            session_start();
                            if(!isset($_SESSION['email']))
                            {?>
                            <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                            <?php
                            }else{
                                if(checkitems(11))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php 
                                }
                            }
                        ?> 

                                </div>
                        </div>
        
                        <div class="card col-md-2  col-sm-6 text-center">
                            <img class="card-img-top" src="../Images/14.jpg" alt="Shirt Image">
                            <div class="card-body">
                                <h5 class="card-title">Jhalasani</h5>
                                <p class="card-text">Price Rs.1300.00</p>
                                <?php
                                session_start();
                                if(!isset($_SESSION['email']))
                                {?>
                                <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                                <?php
                                }else{
                                    if(checkitems(12))
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else{?>
                                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php 
                                    }
                                }
                        ?> 
                            </div>
                        </div>
                    </div>

                
            
            </div>

    </body>

        <div class="footer">
                
            <span class="footer-info"> Copyright © Lifestyle Store. All Rights
                Reserved | Contact Us: +91 90000 00000</span>

        </div >
</html>
