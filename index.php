<!--(systemname)exploreRun -->
<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

    <!-- <link rel="stylesheet" href="css/0001.css"> -->
    <style type="text/css">
        /* ----- */
    </style>
 </head>
<body>

<p>
    アップロード先:<?php echo(__DIR__); ?> &ensp;<a target="_blank" href="exploreRun.php">表示</a><br>
</p>

<form action="upload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="fname">
  <input type="submit" value="アップロード"><br>
</form>

<br>

<form action="index_delete_list.php">
    <input type="submit" value="削除ファイル選択"><br>
</form>

<form action="index_download_list.php">
    <input type="submit" value="DLファイル選択"><br>
</form>

<br>

<a href="../../"> home へ </a><br>

<hr>

<?php

    $dir      =  __DIR__ . '/*.*';
    $filelist =  glob($dir . '*');

    foreach ($filelist as $file) {
        if (is_file($file)) {
            //print($file);
            if ( basename($file) != "index.php" ){
                if ( basename($file) != "data.db" ){
					if ( basename($file) != "exploreRun.php" ){
                        if ( basename($file) != "upload.php" ){
                            if ( basename($file) != "delete.php" ){
                                if ( basename($file) != "index_delete_list.php" ){
                                    if ( basename($file) != "index_download_list.php" ){
                                        if ( basename($file) != "download.php" ){

                                            
print('<a target="_blank" href="' .
    basename($file) . '">' .
    basename($file) . '</a>' ."\n");
echo nl2br("\n");


                                        }
                                    }
                                }
                            }
                        }
					}
                }
            }
        }
    }
?>


</body>
</html>