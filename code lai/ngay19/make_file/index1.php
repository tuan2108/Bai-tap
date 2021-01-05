<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <!-- tạo file trong php -->
    <?php
        if(isset($_POST["filename"])){
            $filename = $_POST["filename"];
            $content = $_POST["content"];

            $myfile = fopen($filename, "w") or die("unable to open file");

            fwrite($myfile, $content);
            fclose($myfile);
        }
    ?>

    <div class="container">
        <h1> demo tạo file</h1>
        <div class="row">
            <div class="col-md-12"> 
                <form action="" method="post" name="file">
                    <div class="form-group">
                        <label for="">Nhập tên file kèm theo đuôi file(vd index.php)</label>
                        <input type="text" name="filename" value="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Nhập nội dung file</label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Tạo file</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>