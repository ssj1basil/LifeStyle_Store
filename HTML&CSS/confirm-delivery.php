<?php include'common.php'; ?>
<html>
 <body>
<?php
$con = @mysqli_connect("localhost","admin","admin","Store") or die(mysqli_error($con));
session_start();
$supplier_id=$_SESSION['supplier'];
$order_id = $_GET['id'];

echo $quantity;
$insert_query ="UPDATE users_items SET users_items.status = 'Delivered' where users_items.id = '$order_id'";
$insert_query_result= mysqli_query($con,$insert_query) or die(mysqli_error($con));

header('location: change-status.php');
?>
</body>
</html>