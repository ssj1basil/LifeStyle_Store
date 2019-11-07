<?php include 'common.php'; ?>
<html>

<body>
    <?php

    $con = @mysqli_connect("localhost", "admin", "admin", "Store") or die(mysqli_error($con));
    session_start();
    if (isset($_SESSION['user'])) {
        $user_id = $_SESSION['user'];

        $old_password = $_POST['old_pass'];
        $new_password = $_POST['new_pass'];
        $re_password = $_POST['re_pass'];

        $get_password = "SELECT password FROM users WHERE users.id= '$user_id'";
        $get_password_result = mysqli_query($con, $get_password) or die(mysqli_error($con));
        $password = mysqli_fetch_array($get_password_result);

        if ($password[0] != md5($old_password)) {
            echo 'Wrong Old Password';
        } else {
            if ($new_password != $re_password) {
                echo 'Passwords do not match. Retype the password';
            } else {
                $new_password = md5($re_password);

                $change_password = "UPDATE users SET password= '$new_password' WHERE users.id = $user_id";
                $change_password_result = mysqli_query($con, $change_password) or die(mysqli_error($con));

                session_unset();
                session_destroy();
                header('location:login.php');
            }
        }
    }

    if (isset($_SESSION['supplier'])) { 
        $supplier_id = $_SESSION['supplier'];

        $old_password = $_POST['old_pass'];
        $new_password = $_POST['new_pass'];
        $re_password = $_POST['re_pass'];

        $get_password = "SELECT password FROM Supplier WHERE supplier_id= '$supplier_id'";
        $get_password_result = mysqli_query($con, $get_password) or die(mysqli_error($con));
        $password = mysqli_fetch_array($get_password_result);

        if ($password[0] != md5($old_password)) {
            echo 'Wrong Old Password';
        } else {
            if ($new_password != $re_password) {
                echo 'Passwords do not match. Retype the password';
            } else {
                $new_password = md5($re_password);

                $change_password = "UPDATE Supplier SET password= '$new_password' WHERE supplier_id = $supplier_id";
                $change_password_result = mysqli_query($con, $change_password) or die(mysqli_error($con));

                session_unset();
                session_destroy();
                header('location:login.php');
            }
        }
    }

    ?>
</body>

</html>