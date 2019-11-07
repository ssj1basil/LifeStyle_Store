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
                        if( !isset($_SESSION['user']))
                        {?>
                        <a href="login.php" class="btn btn-primary btn-block" >Add to cart</a>
                        <?php
                        }else{
                            if(checkitems(2))   
                            {
                                echo '<br><br><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{?>
                                    <div id="dom-target-1" style="display: none;">
                                    <?php

                                        $con = @mysqli_connect("localhost","admin","admin","Store") or 
                                        die(mysqli_error($con));

                                        $get_quantity= "SELECT Quantity FROM items WHERE id = '2'";
                                        $get_quantity_result=mysqli_query($con,$get_quantity) or die(mysqli_error($con));
                                        $fetch_quantity = mysqli_fetch_array($get_quantity_result);

                                        $output = "$fetch_quantity[0]";  

                                        echo htmlspecialchars($output); 
                                    ?>
                                    </div>
                                    <script>
                                        var div = document.getElementById("dom-target-1");
                                        var myData1 = div.textContent;
                                        
                                        $(function(){
                                            var $select = $(".1-1");
                                            for (i=1;i<= myData1;i++){
                                                $select.append($('<option></option>').val(i).html(i))
                                            }
                                         });
                                    </script>
                                    
                                    <div class="form-group">
                                    <form name="frmLang" action="cart-add.php" method="get">
                                            <input type="hidden" name="id" value="<?php echo "2".$rguid; ?>"> 

                                              <p>Quantity : <select class="1-1" name="quantity"></select></p>
                                    
                                            <div class="submit-btn">
                                                <input type="submit" value="Add to Cart" class="btn btn-primary btn-block btn-primary" id="Submit"></input>
                                            </div> 
                                        </form>                                              
                                    </div>
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
                        if(!isset($_SESSION['user']))
                        {?>
                        <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                        <?php
                        }else{
                            if(checkitems(3))
                            {
                                echo '<br><br><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{?>
                                    <div id="dom-target-2" style="display: none;">
                                    <?php

                                        $con = @mysqli_connect("localhost","admin","admin","Store") or 
                                        die(mysqli_error($con));

                                        $get_quantity= "SELECT Quantity FROM items WHERE id = '3'";
                                        $get_quantity_result=mysqli_query($con,$get_quantity) or die(mysqli_error($con));
                                        $fetch_quantity = mysqli_fetch_array($get_quantity_result);

                                        $output = "$fetch_quantity[0]";  

                                        echo htmlspecialchars($output); 
                                    ?>
                                    </div>
                                    <script>
                                        var div = document.getElementById("dom-target-2");
                                        var myData2 = div.textContent;
                                        
                                        $(function(){
                                            var $select = $(".1-2");
                                            for (i=1;i<= myData2;i++){
                                                $select.append($('<option></option>').val(i).html(i))
                                            }
                                         });
                                    </script>
                                    
                                    <div class="form-group">
                                    <form name="frmLang" action="cart-add.php" method="get">
                                            <input type="hidden" name="id" value="<?php echo "3".$rguid; ?>"> 

                                              <p>Quantity : <select class="1-2" name="quantity"></select></p>
                                    
                                            <div class="submit-btn">
                                                <input type="submit" value="Add to Cart" class="btn btn-primary btn-block btn-primary" id="Submit"></input>
                                            </div> 
                                        </form>                                              
                                    </div>
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
                        if(!isset($_SESSION['user']))
                        {?>
                        <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                        <?php
                        }else{
                            if(checkitems(4))
                            {
                                echo '<br><br><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{?>
                                    <div id="dom-target-3" style="display: none;">
                                    <?php

                                        $con = @mysqli_connect("localhost","admin","admin","Store") or 
                                        die(mysqli_error($con));

                                        $get_quantity= "SELECT Quantity FROM items WHERE id = '4'";
                                        $get_quantity_result=mysqli_query($con,$get_quantity) or die(mysqli_error($con));
                                        $fetch_quantity = mysqli_fetch_array($get_quantity_result);

                                        $output = "$fetch_quantity[0]";  

                                        echo htmlspecialchars($output); 
                                    ?>
                                    </div>
                                    <script>
                                        var div = document.getElementById("dom-target-3");
                                        var myData3 = div.textContent;
                                        
                                        $(function(){
                                            var $select = $(".1-3");
                                            for (i=1;i<= myData3;i++){
                                                $select.append($('<option></option>').val(i).html(i))
                                            }
                                         });
                                    </script>
                                    
                                    <div class="form-group">
                                    <form name="frmLang" action="cart-add.php" method="get">
                                            <input type="hidden" name="id" value="<?php echo "4".$rguid; ?>"> 

                                              <p>Quantity : <select class="1-3" name="quantity"></select></p>
                                    
                                            <div class="submit-btn">
                                                <input type="submit" value="Add to Cart" class="btn btn-primary btn-block btn-primary" id="Submit"></input>
                                            </div> 
                                        </form>                                              
                                    </div>
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
                        if(!isset($_SESSION['user']))
                        {?>
                        <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                        <?php
                        }else{
                            if(checkitems(1))
                            {
                                echo '<br><br><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{?>
                                    <div id="dom-target-4" style="display: none;">
                                    <?php

                                        $con = @mysqli_connect("localhost","admin","admin","Store") or 
                                        die(mysqli_error($con));

                                        $get_quantity= "SELECT Quantity FROM items WHERE id = '1'";
                                        $get_quantity_result=mysqli_query($con,$get_quantity) or die(mysqli_error($con));
                                        $fetch_quantity = mysqli_fetch_array($get_quantity_result);

                                        $output = "$fetch_quantity[0]";  

                                        echo htmlspecialchars($output); 
                                    ?>
                                    </div>
                                    <script>
                                        var div = document.getElementById("dom-target-4");
                                        var myData4 = div.textContent;
                                        
                                        $(function(){
                                            var $select = $(".1-4");
                                            for (i=1;i<= myData4;i++){
                                                $select.append($('<option></option>').val(i).html(i))
                                            }
                                         });
                                    </script>
                                    
                                    <div class="form-group">
                                    <form name="frmLang" action="cart-add.php" method="get">
                                            <input type="hidden" name="id" value="<?php echo "1".$rguid; ?>"> 

                                              <p>Quantity : <select class="1-4" name="quantity"></select></p>
                                    
                                            <div class="submit-btn">
                                                <input type="submit" value="Add to Cart" class="btn btn-primary btn-block btn-primary" id="Submit"></input>
                                            </div> 
                                        </form>                                             
                                    </div>
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
                            if(!isset($_SESSION['user']))
                            {?>
                            <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                            <?php
                            }else{
                                if(checkitems(5))
                                {
                                    echo '<br><br><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{?>
                                    <div id="dom-target-5" style="display: none;">
                                    <?php

                                        $con = @mysqli_connect("localhost","admin","admin","Store") or 
                                        die(mysqli_error($con));

                                        $get_quantity= "SELECT Quantity FROM items WHERE id = '5'";
                                        $get_quantity_result=mysqli_query($con,$get_quantity) or die(mysqli_error($con));
                                        $fetch_quantity = mysqli_fetch_array($get_quantity_result);

                                        $output = "$fetch_quantity[0]";  

                                        echo htmlspecialchars($output); 
                                    ?>
                                    </div>
                                    <script>
                                        var div = document.getElementById("dom-target-5");
                                        var myData5 = div.textContent;
                                        
                                        $(function(){
                                            var $select = $(".1-5");
                                            for (i=1;i<= myData5;i++){
                                                $select.append($('<option></option>').val(i).html(i))
                                            }
                                         });
                                    </script>
                                    
                                    <div class="form-group">
                                    <form name="frmLang" action="cart-add.php" method="get">
                                            <input type="hidden" name="id" value="<?php echo "5".$rguid; ?>"> 

                                              <p>Quantity : <select class="1-5" name="quantity"></select></p>
                                    
                                            <div class="submit-btn">
                                                <input type="submit" value="Add to Cart" class="btn btn-primary btn-block btn-primary" id="Submit"></input>
                                            </div> 
                                        </form>                                             
                                    </div>
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
                                if(!isset($_SESSION['user']))
                                {?>
                                <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                                <?php
                                }else{
                                    if(checkitems(6))
                                    {
                                        echo '<br><br><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else{?>
                                        <div id="dom-target-6" style="display: none;">
                                    <?php

                                        $con = @mysqli_connect("localhost","admin","admin","Store") or 
                                        die(mysqli_error($con));

                                        $get_quantity= "SELECT Quantity FROM items WHERE id = '6'";
                                        $get_quantity_result=mysqli_query($con,$get_quantity) or die(mysqli_error($con));
                                        $fetch_quantity = mysqli_fetch_array($get_quantity_result);

                                        $output = "$fetch_quantity[0]";  

                                        echo htmlspecialchars($output); 
                                    ?>
                                    </div>
                                    <script>
                                        var div = document.getElementById("dom-target-6");
                                        var myData6 = div.textContent;
                                        
                                        $(function(){
                                            var $select = $(".1-6");
                                            for (i=1;i<= myData6;i++){
                                                $select.append($('<option></option>').val(i).html(i))
                                            }
                                         });
                                    </script>
                                    
                                    <div class="form-group">
                                    <form name="frmLang" action="cart-add.php" method="get">
                                            <input type="hidden" name="id" value="<?php echo "6".$rguid; ?>"> 

                                              <p>Quantity : <select class="1-6" name="quantity"></select></p>
                                    
                                            <div class="submit-btn">
                                                <input type="submit" value="Add to Cart" class="btn btn-primary btn-block btn-primary" id="Submit"></input>
                                            </div> 
                                        </form> 
                                            

                                            
                                    </div>
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
                            if(!isset($_SESSION['user']))
                            {?>
                            <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                            <?php
                            }else{
                                if(checkitems(7))
                                {
                                    echo '<br><br><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{?>
                                    <div id="dom-target-7" style="display: none;">
                                    <?php

                                        $con = @mysqli_connect("localhost","admin","admin","Store") or 
                                        die(mysqli_error($con));

                                        $get_quantity= "SELECT Quantity FROM items WHERE id = '7'";
                                        $get_quantity_result=mysqli_query($con,$get_quantity) or die(mysqli_error($con));
                                        $fetch_quantity = mysqli_fetch_array($get_quantity_result);

                                        $output = "$fetch_quantity[0]";  

                                        echo htmlspecialchars($output); 
                                    ?>
                                    </div>
                                    <script>
                                        var div = document.getElementById("dom-target-7");
                                        var myData7 = div.textContent;
                                        
                                        $(function(){
                                            var $select = $(".1-7");
                                            for (i=1;i<= myData7;i++){
                                                $select.append($('<option></option>').val(i).html(i))
                                            }
                                         });
                                    </script>
                                    
                                    <div class="form-group">
                                    <form name="frmLang" action="cart-add.php" method="get">
                                            <input type="hidden" name="id" value="<?php echo "7".$rguid; ?>"> 

                                              <p>Quantity : <select class="1-7" name="quantity"></select></p>
                                    
                                            <div class="submit-btn">
                                                <input type="submit" value="Add to Cart" class="btn btn-primary btn-block btn-primary" id="Submit"></input>
                                            </div>    
                                        </form>                                        
                                    </div>                                            
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
                            if(!isset($_SESSION['user']))
                            {?>
                            <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                            <?php
                            }else{
                                if(checkitems(8))
                                {
                                    echo '<br><br><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{?>
                                    <div id="dom-target-8" style="display: none;">
                                    <?php

                                        $con = @mysqli_connect("localhost","admin","admin","Store") or 
                                        die(mysqli_error($con));

                                        $get_quantity= "SELECT Quantity FROM items WHERE id = '8'";
                                        $get_quantity_result=mysqli_query($con,$get_quantity) or die(mysqli_error($con));
                                        $fetch_quantity = mysqli_fetch_array($get_quantity_result);

                                        $output = "$fetch_quantity[0]";  

                                        echo htmlspecialchars($output); 
                                    ?>
                                    </div>
                                    <script>
                                        var div = document.getElementById("dom-target-8");
                                        var myData8 = div.textContent;
                                        
                                        $(function(){
                                            var $select = $(".1-8");
                                            for (i=1;i<= myData8;i++){
                                                $select.append($('<option></option>').val(i).html(i))
                                            }
                                         });
                                    </script>
                                    
                                    <div class="form-group">
                                    <form name="frmLang" action="cart-add.php" method="get">
                                            <input type="hidden" name="id" value="<?php echo "8".$rguid; ?>"> 

                                              <p>Quantity : <select class="1-8" name="quantity"></select></p>
                                    
                                            <div class="submit-btn">
                                                <input type="submit" value="Add to Cart" class="btn btn-primary btn-block btn-primary" id="Submit"></input>
                                            </div> 
                                        </form>                                           
                                    </div>
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
                                if(!isset($_SESSION['user']))
                                {?>
                                <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                                <?php
                                }else{
                                    if(checkitems(10))
                                    {
                                        echo '<br><br><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else{?>
                                        <div id="dom-target-9" style="display: none;">
                                    <?php

                                        $con = @mysqli_connect("localhost","admin","admin","Store") or 
                                        die(mysqli_error($con));

                                        $get_quantity= "SELECT Quantity FROM items WHERE id = '10'";
                                        $get_quantity_result=mysqli_query($con,$get_quantity) or die(mysqli_error($con));
                                        $fetch_quantity = mysqli_fetch_array($get_quantity_result);

                                        $output = "$fetch_quantity[0]";  

                                        echo htmlspecialchars($output); 
                                    ?>
                                    </div>
                                    <script>
                                        var div = document.getElementById("dom-target-9");
                                        var myData9 = div.textContent;
                                        
                                        $(function(){
                                            var $select = $(".1-9");
                                            for (i=1;i<= myData9;i++){
                                                $select.append($('<option></option>').val(i).html(i))
                                            }
                                         });
                                    </script>
                                    
                                    <div class="form-group">
                                    <form name="frmLang" action="cart-add.php" method="get">
                                            <input type="hidden" name="id" value="<?php echo "10".$rguid; ?>"> 

                                              <p>Quantity : <select class="1-9" name="quantity"></select></p>
                                    
                                            <div class="submit-btn">
                                                <input type="submit" value="Add to Cart" class="btn btn-primary btn-block btn-primary" id="Submit"></input>
                                            </div> 
                                        </form>                                           
                                    </div>
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
                            if(!isset($_SESSION['user']))
                            {?>
                            <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                            <?php
                            }else{
                                if(checkitems(9))
                                {
                                    echo '<br><br><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{?>
                                        <div id="dom-target-10" style="display: none;">
                                    <?php

                                        $con = @mysqli_connect("localhost","admin","admin","Store") or 
                                        die(mysqli_error($con));

                                        $get_quantity= "SELECT Quantity FROM items WHERE id = '9'";
                                        $get_quantity_result=mysqli_query($con,$get_quantity) or die(mysqli_error($con));
                                        $fetch_quantity = mysqli_fetch_array($get_quantity_result);

                                        $output = "$fetch_quantity[0]";  

                                        echo htmlspecialchars($output); 
                                    ?>
                                    </div>
                                    <script>
                                        var div = document.getElementById("dom-target-10");
                                        var myData10 = div.textContent;
                                        
                                        $(function(){
                                            var $select = $(".1-10");
                                            for (i=1;i<= myData10;i++){
                                                $select.append($('<option></option>').val(i).html(i))
                                            }
                                         });
                                    </script>
                                    
                                    <div class="form-group">
                                    <form name="frmLang" action="cart-add.php" method="get">
                                            <input type="hidden" name="id" value="<?php echo "9".$rguid; ?>"> 

                                              <p>Quantity : <select class="1-10" name="quantity"></select></p>
                                    
                                            <div class="submit-btn">
                                                <input type="submit" value="Add to Cart" class="btn btn-primary btn-block btn-primary" id="Submit"></input>
                                            </div>   
                                        </form>                                         
                                    </div>
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
                            if(!isset($_SESSION['user']))
                            {?>
                            <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                            <?php
                            }else{
                                if(checkitems(11))
                                {
                                    echo '<br><br><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{?>                                <div id="dom-target-11" style="display: none;">
                                    <?php

                                        $con = @mysqli_connect("localhost","admin","admin","Store") or 
                                        die(mysqli_error($con));

                                        $get_quantity= "SELECT Quantity FROM items WHERE id = '11'";
                                        $get_quantity_result=mysqli_query($con,$get_quantity) or die(mysqli_error($con));
                                        $fetch_quantity = mysqli_fetch_array($get_quantity_result);

                                        $output = "$fetch_quantity[0]";  

                                        echo htmlspecialchars($output); 
                                    ?>
                                    </div>
                                    <script>
                                        var div = document.getElementById("dom-target-11");
                                        var myData11 = div.textContent;
                                        
                                        $(function(){
                                            var $select = $(".1-11");
                                            for (i=1;i<= myData11;i++){
                                                $select.append($('<option></option>').val(i).html(i))
                                            }
                                         });
                                    </script>
                                    
                                    <div class="form-group">
                                    <form name="frmLang" action="cart-add.php" method="get">
                                            <input type="hidden" name="id" value="<?php echo "11".$rguid; ?>"> 

                                              <p>Quantity : <select class="1-11" name="quantity"></select></p>
                                    
                                            <div class="submit-btn">
                                                <input type="submit" value="Add to Cart" class="btn btn-primary btn-block btn-primary" id="Submit"></input>
                                            </div>
                                        </form>
                                            
                                    </div>
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
                                if(!isset($_SESSION['user']))
                                {?>  
                                <a href="login.php" class="btn btn-primary btn-block" >Add to Cart</a>
                                <?php
                                }else{

                                    if(checkitems(12))
                                    {
                                        echo '<br><br><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else{?>
                                <div id="dom-target-12" style="display: none;">
                                    <?php

                                        $con = @mysqli_connect("localhost","admin","admin","Store") or 
                                        die(mysqli_error($con));

                                        $get_quantity= "SELECT Quantity FROM items WHERE id = '12'";
                                        $get_quantity_result=mysqli_query($con,$get_quantity) or die(mysqli_error($con));
                                        $fetch_quantity = mysqli_fetch_array($get_quantity_result);

                                        $output = "$fetch_quantity[0]";  

                                        echo htmlspecialchars($output); 
                                    ?>
                                    </div>
                                    <script>
                                        var div = document.getElementById("dom-target-12");
                                        var myData12 = div.textContent;
                                        
                                        $(function(){
                                            var $select = $(".1-12");
                                            for (i=1;i<= myData12;i++){
                                                $select.append($('<option></option>').val(i).html(i))
                                            }
                                         });
                                    </script>
                                    
                                    <div class="form-group">
                                        <form name="frmLang" action="cart-add.php" method="get">
                                            <input type="hidden" name="id" value="<?php echo "12".$rguid; ?>"> 

                                              <p>Quantity : <select class="1-12" name="quantity"></select></p>
                                    
                                            <div class="submit-btn">
                                                <input type="submit" value="Add to Cart" class="btn btn-primary btn-block btn-primary" id="Submit"></input>
                                            </div>

                                        </form>
                  
                                    </div>
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
