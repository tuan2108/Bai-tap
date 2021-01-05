<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
        if(!isset($_SESSION["admin"])){
            header("location:login.php");
            exit();
        }
    ?>
    <ul>
        <li>trang chủ</li>
        <li>giới thiệu</li>
        <li>blog</li>
        <li>liên hệ</li>
        <li><a href="logout.php">đăng xuất</a></li>
    </ul>
</body>
</html>