<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php

    $dir = "list/";
    $listfile = scandir($dir);
    echo "<pre>";
    print_r($listfile);
    echo "</pre>";
    if(isset($_POST["list"])){
        $list = $dir . $_POST["list"];
        $myfile = fopen($list, "r") or die(" unable to open file");
        $content = fread($myfile, filesize($list) );
        fclose($myfile);
    }
  ?>

  <div>
      <form action="" method="post">
          <p>
              <label for="">Chọn file muốn đọc</label>
                <select name="list" id="">
                    <option value="">Chọn thẻ trong thư mục</option>
                    <?php
                        foreach($listfile as $f1){
                            $except = [".", ".."];
                            if(!in_array($f1, $except)){
                                ?>
                                    <option value="<?php echo $f1;?>"><?php echo $f1;?></option>
                                <?php
                            }
                        }
                    ?>
                </select>
          </p>

          <p>
              <label for="">Nội dung file</label>
              <textarea name="" id="" cols="30" rows="10">
                  <?php echo isset($content) ? $content : "";?>
              </textarea>
          </p>

          <p><button type="submit">đọc file</button></p>
      </form>
  </div>
</body>
</html>