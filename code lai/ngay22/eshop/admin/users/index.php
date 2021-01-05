<?php
    $path_define = dirname(__FILE__);
    $path_define = dirname($path_define);
    include_once $path_define ."../../lib/connect.php";
    include_once $path_define ."../../define.php";
    var_dump($connection);
    $sql = "SELECT * FROM users";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $users = $stmt->fetchAll(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1></h1> 
        <div><a href="<?php echo DOMAIN_SITE .'/admin/users/create.php'?>" class="btn btn-info">Thêm người dùng</a></div> 
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Sinh Nhật</th>
                            <th>Ảnh</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            if(is_array($users)&& !empty($users)){
                                foreach($users as $user){
                                    ?>
                                    <tr>
                                        <td><?php echo $user["id"]; ?></td>
                                        <td><?php echo $user["username"]; ?></td>
                                        <td><?php echo $user["user_avatar"]; ?></td>
                                        <td><?php echo $user["user_birth"]; ?></td>
                                        <td>
                                            <a href="btn btn-warning">Sửa</a>
                                            <a href="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr>    
                                    <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>