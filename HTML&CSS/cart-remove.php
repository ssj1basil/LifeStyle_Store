<?php include'common.php'; ?>
<html>
 <body>
<?php
$con = @mysqli_connect("localhost","admin","admin","Store") or die(mysqli_error($con));
session_start();
$user_id=$_SESSION['user'];
$item_id = $_GET['id'];
$delete_query ="DELETE FROM users_items WHERE users_items.user_id AND users_items.item_id=$item_id";
$delete_query_result= mysqli_query($con,$delete_query) or die(mysqli_error($con));

header('location: carts.php');
?>
</body>
</html>