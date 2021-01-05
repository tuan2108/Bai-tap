<?php
    $path_define = dirname(__FILE__);
    $path_define = dirname($path_define);
    include_once $path_define ."/define.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>ADMIN quản trị chung</h1>
        <div class="row">
            <div class="col-md-12">
                <nav>
                    <ul>
                        <li><a href="<?php echo DOMAIN_SITE ."/admin/products/index.php" ?>">Quản trị sản phẩm</a></li>
                        <li><a href="<?php echo DOMAIN_SITE ."/admin/users/index.php" ?>">Quản trị người dùng</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>
</html>