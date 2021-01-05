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

        if(isset($_SESSION["admin"])){
            header("location:admin.php");
            exit();
        }

        if(isset($_SESSION["count_login"]) && ($_SESSION["count_login"] > 5)){
            echo "Đã quá số lần đăng nhập";
            exit();
        }

        if(isset($_POST["username"]) && isset($_POST["password"])){
            $username = trim($_POST["username"]);
            $password = $_POST["password"];

            if($username == "admin" && $password == "123456"){
                $_SESSION["admin"] = [
                    "name" => "admin",
                    "password" => "123456",
                ];

                unset($_SESSION["count_login"]);
                header("location:admin.php");
                exit();
            }else{
                if(isset($_SESSION["count_login"])){
                    $_SESSION["count_login"] +=1;
                }else{
                    $_SESSION["count_login"] = 1;
                }
                echo "<h1 style='color:red'>Thông tin đăng nhập sai</h1>";
            }
            
        }
    ?>
    <div>
        <form action="" method="post" name="dangnhap">
            <p>
                <label for="">username</label>
                <input type="text" name="username" value="">
            </p>

            <p>
                <label for="">password</label>
                <input type="password" name="password" value="">
            </p>

            <p>
                <input type="submit" name="submit" value="Đăng nhập">
            </p>
        </form>
    </div>
</body>
</html>