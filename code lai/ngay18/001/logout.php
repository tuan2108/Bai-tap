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
        session_unset();
        session_destroy();
        header("location:admin.php");
        exit();
    ?>
</body>
</html>