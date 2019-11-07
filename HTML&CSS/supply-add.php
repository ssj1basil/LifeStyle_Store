<?php include 'common.php'; ?>
<html>

<body>
    <?php
    $con = @mysqli_connect("localhost", "admin", "admin", "Store") or die(mysqli_error($con));
    session_start();
    $supplier_id = $_SESSION['supplier'];
    $item_id = $_GET['id'];
    $delete_query = "UPDATE items SET items.Supplier_id = '$supplier_id' where items.id= '$item_id' ";
    $delete_query_result = mysqli_query($con, $delete_query) or die(mysqli_error($con));

    header('location: supplier.php');
    ?>
</body>

</html>