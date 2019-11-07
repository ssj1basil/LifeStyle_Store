<?php include'common.php'; ?>
<html>
 <body>
<?php
$con = @mysqli_connect("localhost","admin","admin","Store") or die(mysqli_error($con));
session_start();
$user_id=$_SESSION['supplier'];
$item_id = $_GET['id'];
$quantity = $_GET['quantity'];

echo $quantity;
$update_query ="UPDATE items SET Quantity = Quantity + '$quantity' where id = '$item_id '";
$update_query_result= mysqli_query($con,$update_query) or die(mysqli_error($con));

header('location: quantity-add.php');
?>
</body>
</html>