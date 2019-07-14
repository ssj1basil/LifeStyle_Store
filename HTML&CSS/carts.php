<?php include'common.php';
if (!isset($_SESSION['email'])) {
    header('location:login.php ');}  
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="carts.css">
    </head>

    <body>

    <script src="https://kit.fontawesome.com/bb776e841c.js"></script>

    <style>
    <?php
            include '../bootstrap/bootstrap.min.css';
            include 'carts.css';?>
    </style>
    

    <?php
        include'header.php';?>
        
        <div class="container table-responsive">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Item Number</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Price</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    session_start();
                    $con = @mysqli_connect("localhost","admin","admin","Store") or die(mysqli_error($con));

                    $sum=0;
                    $user_id=$_SESSION['user'];
                    $get_items_query="SELECT users_items.item_id,items.name,items.price FROM users_items INNER JOIN items ON users_items.item_id= items.id 
                    WHERE users_items.user_id='$user_id' AND users_items.status='Added to cart'";
                    $get_items_result= mysqli_query($con,$get_items_query) or die(mysqli_error($con));
                    $total_rows = mysqli_num_rows($get_items_result);


                    if($total_rows> 0)
                    {
                        for ($row = 0; $row < $total_rows; $row ++) {
                            $row_info = mysqli_fetch_array($get_items_result);
                            echo "<tr>";
                            echo "<td>",$row+1, "</td>";
                            echo "<td>",$row_info[1],"</td>";
                            echo "<td>",$row_info[2],"</td>";
                            echo "<td><a href='cart-remove.php?id={$row_info[0]}'>Remove</a></td>";
                            echo "</tr>";
                            $sum+=$row_info[2];
                            }
                    }
                    ?>
                  
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td>Total</td>
                        <?php
                        echo "<td>",$sum,"</td>";
                        echo "<td><a href='success.php' class=\"btn btn-primary\" >Confirm Order</a></td>";?> 
                    </tr>
                </tfoot>
            </table>
        </div>
    
    </body>

    <div class="footer">
            
        <span class="footer-info"> Copyright © Lifestyle Store. All Rights
            Reserved | Contact Us: +91 90000 00000</span>

    </div >
</html>