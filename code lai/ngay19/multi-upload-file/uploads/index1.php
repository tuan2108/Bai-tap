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
           echo "<pre>"; 
           print_r($_FILES);
           echo "</pre>"; 
           $target_dir = "upload/";
           if(!file_exists($target_dir)){
               mkdir($target_dir, 0777, true);
           }

           if(is_array($_FILES["uploadimage"]["name"]) && !empty($_FILES["uploadimage"]["name"])){
               $countuploadimage = count($_FILES["uploadimage"]["name"]);
               for($i = 0; $i< $countuploadimage; $i++){
                   $target_file = $target_dir . basename($_FILES["uploadimage"]["name"][$i]);

                   if(move_uploaded_file($_FILES["uploadimage"]["tmp_name"][$i], $target_file)){
                       echo "<br> File ".htmlspecialchars(basename($_FILES["uploadimage"]["name"][$i])) . "đã tải lên thành công";
                   }else{
                    echo "<br> File ".htmlspecialchars(basename($_FILES["uploadimage"]["name"][$i])) . "đã tải lên thất bại";
                   }
               }
           }
       }
    ?>
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            <p>
                <label for="">upload file</label>
                <input type="file" name="uploadimage[]" multiple>
            </p>

            <p>
                <input type="submit" name="submit" value="Upload">
            </p>
        </form>
    </div>
</body>
</html>