<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["submit"])){
            $target_dir = "uploads/";
            if(!file_exists($target_dir)){
                mkdir($target_dir, 0777, true);
            }
            $target_file = $target_dir .basename($_FILES["uploadimage"]["name"]);
            if(move_uploaded_file($_FILES["uploadimage"]["tmp_name"], $target_file)){
                echo "file " . htmlspecialchars(basename($_FILES["uploadimage"]["name"])) ." đã được upload thành công";
            }else{
                echo "Upload thất bại do lỗi";
            }
        }
    ?>

    <div>
        <form action="" method="post" name="upload" enctype="multipart/form-data">
            <p>
                <label for="">Upload</label>
                <input type="file" name="uploadimage">
            </p>        

            <p>
                <input type="submit" name="submit" value="Submit">
            </p>
        </form>
    </div>
</body>
</html>