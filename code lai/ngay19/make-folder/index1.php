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
        print_r($_POST);
        echo "</pre>";

        if(isset($_POST["folder_path"])){
            $folder_path = $_POST["folder_path"];
            if(!file_exists($folder_path)){
                mkdir($folder_path, 0777, true);
                if(file_exists($folder_path)){
                    echo "<br> Tạo thư mục thành công";
                }else{
                    echo "<br> Tạo thư mục thất bại";
                }
            }else{
                echo "<br> Thư mục đã tồn tại";
            }
        }
    ?>

    <div>
        <form action="" method="post" name="folder">
            <p>
                <label for="">Nhập đường dẫn folder folder</label>
                <input type="text" name="folder_path">
            </p>

            <p>
                <button type="submit" >Tạo folder</button>
            </p>
        </form>
    </div>
</body>
</html>