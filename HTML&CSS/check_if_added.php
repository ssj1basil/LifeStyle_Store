<?php include'common.php'; ?>
<html>
 <body>
<?php

    function checkitems($item_id)
    {
        $con = @mysqli_connect("localhost","admin","admin","Store") or die(mysqli_error($con));
        session_start();
        $user_id=$_SESSION['user'];
        
        $check_items= "SELECT * FROM users_items WHERE (users_items.item_id='$item_id' AND users_items.user_id= '$user_id') AND users_items.status='Added to cart'";
        $check_items_result = mysqli_query($con,$check_items) or die(mysqli_error($con));
        $total_rows = mysqli_num_rows($check_items_result);

        if($total_rows > 0 )
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
 ?>
 </body>
</html>