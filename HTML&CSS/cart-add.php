<?php include'common.php'; ?>
<html>
 <body>
<?php
$con = @mysqli_connect("localhost","admin","admin","Store") or die(mysqli_error($con));
session_start();
$user_id=$_SESSION['user'];
$item_id = $_GET['id'];
$quantity = $_GET['quantity'];

echo $quantity;
$insert_query ="INSERT INTO users_items(user_id, item_id, status,Quantity) VALUES('$user_id', '$item_id', 'Added to cart','$quantity')";
$insert_query_result= mysqli_query($con,$insert_query) or die(mysqli_error($con));

header('location: products.php');
?>
</body>
</html>