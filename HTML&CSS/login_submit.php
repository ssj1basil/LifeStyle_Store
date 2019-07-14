<?php include'common.php'?>
<html>
    <body>
        <?php

            $con = @mysqli_connect("localhost","admin","admin","Store") or 
            die(mysqli_error($con));

            $email=$_POST['email'];
            $password=md5($_POST['password']);

            $fetch_id= "SELECT id FROM users WHERE users.email= '$email' AND users.password= '$password'";
            $fetch_id_result = mysqli_query($con,$fetch_id) or die(mysqli_error($con));
            $total_rows = mysqli_num_rows($fetch_id_result);
            $row= mysqli_fetch_array($fetch_id_result);

            
            if($total_rows <= 0)
            {
                echo 'Wrong Credentials';
            }
            else
            {
                echo $fetch_id;

                session_start();
                $_SESSION['user']=$row[0];
                $_SESSION['email']='true';

                if (isset($_SESSION['user'])) {
                    header('location: products.php');
                    }
                
            }
        ?>
    </body>
</html>