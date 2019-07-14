<?php include'common.php';
if (!isset($_SESSION['email'])) {
    header('location:login.php ');}  
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="settings.css">
    </head>

    <body>

    <script src="https://kit.fontawesome.com/bb776e841c.js"></script>

    <style>
    <?php
            include '../bootstrap/bootstrap.min.css';
            include 'settings.css';?>

    </style>

    <?php
        session_start();
        include'header.php';?>
        
        <div class="container container-form">
            <div class="card-body">
            <h2 class="form-title">Change Password</h2>
            <form action="setting_submit.php" method="post">
                <div class="form-group">
                    <input type="password" name="old_pass" class="form-control input-lg" placeholder=" Old Password">
                </div>
                <div class="form-group">
                        <input type="password" name="new_pass" class="form-control input-lg" placeholder=" New Password">
                </div>
                <div class="form-group">
                        <input type="password" name="re_pass" class="form-control input-lg" placeholder=" Re-enter New Password">
                </div>
            <div class="Change-btn">
                <input type="submit" value="Submit" class="btn btn-primary btn-md" id="Change"></input>
            </div>
            </form>
        </div>

        </div>
    </body>

        <div class="footer">
                
            <span class="footer-info"> Copyright © Lifestyle Store. All Rights
                    Reserved | Contact Us: +91 90000 00000</span>

        </div >
</html>
