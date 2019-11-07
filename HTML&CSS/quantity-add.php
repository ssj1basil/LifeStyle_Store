<?php
include 'common.php';
if (!isset($_SESSION['supplier'])) {
    header('location:login.php ');
}
if (isset($_SESSION['supplier'])) {
    $supplier_id = $_SESSION['supplier'];
}
?>


<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="carts.css">
</head>

<body>

    <script src="https://kit.fontawesome.ucom/bb776e841c.js"></script>

    <style>
        <?php
        include '../bootstrap/bootstrap.min.css';
        include 'carts.css'; ?>
    </style>

    <?php
    include 'header.php'; ?>

    <div class="container table-responsive">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Item ID</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">In Stock</th>
                    <th scope="col">Quantity to be supplied</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                session_start();
                $con = @mysqli_connect("localhost", "admin", "admin", "Store") or die(mysqli_error($con));

                $sum = 0;
                $get_items_NULL_query = "SELECT id,name,price,Quantity from items where Supplier_id ='$supplier_id'";
                $get_items_result = mysqli_query($con, $get_items_NULL_query) or die(mysqli_error($con));
                $total_rows = mysqli_num_rows($get_items_result);

                if ($total_rows > 0) {
                    for ($row = 0; $row < $total_rows; $row++) {
                        $row_info = mysqli_fetch_array($get_items_result);

                        echo "<tr>";
                        echo "<td>", $row_info[0], "</td>";
                        echo "<td>", $row_info[1], "</td>";
                        echo "<td>", $row_info[2], "</td>";
                        echo "<td>", $row_info[3], "</td>";
                        ?>
                        <form action="quantity-added.php" method="GET">
                            <input type="hidden" name="id" value="<?php echo $row_info[0].$rguid; ?>">
                            <td><input type="number" name="quantity" min="0"></td>
                            <td><input type="submit" class="btn-primary btn "><td>
                        </form>

                <?php
                        
                        echo "</tr>";
                    }
                }
                ?>