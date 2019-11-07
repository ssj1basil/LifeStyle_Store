<?php
include'common.php';

$con = @mysqli_connect("localhost","admin","admin","Store") or 
die(mysqli_error($con));

$email = $_POST['email'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$password = md5($_POST['password']);
$city = $_POST['city'];
$address = $_POST['address'];
$type = $_POST['type'];
$var1= "Buyer";
$var2= "Supplier";



$fetch_email = "SELECT id FROM users WHERE users.email = '$email'";   
$fetch_email_result = mysqli_query($con,$fetch_email) or die(mysqli_error($con));
$total_rows = mysqli_num_rows($fetch_email_result);

if($total_rows > 0)
{

    echo "Email already registered";
}

else{

    if( strcmp($type,$var1) == 0)
    {   
        $user_registration_query = "insert into users(name,email,password,contact,city,address )
        values ('$name','$email', '$password', '$contact', '$city','$address')";

        $user_registration_submit = mysqli_query($con,$user_registration_query)
        or die(mysqli_error($con));
        echo "User successfully inserted";

        
        session_start();
        $_SESSION['user']= mysqli_insert_id($con);
        $_SESSION['email'] ='true';

        if (isset($_SESSION['user'])) {
            header('location: products.php');
            }
    }


    else
        {
            if(strcmp($type,$var2 )==0)
            {$user_registration_query = "insert into Supplier(name,email,password,contact,city,address )
            values ('$name','$email', '$password', '$contact', '$city','$address')";
        
            $user_registration_submit = mysqli_query($con,$user_registration_query)
            or die(mysqli_error($con));
            echo "User successfully inserted";
        
            
            session_start();
            $_SESSION['supplier']= mysqli_insert_id($con);
            $_SESSION['email'] ='true';
        
            if (isset($_SESSION['supplier'])) {
                header('location: supplier.php');
                }
            }

        } 

}

?>