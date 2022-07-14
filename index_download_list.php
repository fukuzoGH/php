

<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CSS3</title>

    <!-- <link rel="stylesheet" href="css/0001.css"> -->
    <style type="text/css">
        /* ----- */
    </style>
 </head>
<body>

<p>
    <a href="."> 戻る </a>
</p>

<p>
    DLファイル先:<?php echo(__DIR__); ?><br>
</p>



<form method="POST" action="download.php">
    <input type="submit" value="ダウンロード"><br>

<hr>

<?php

    $f_cnt = 1;
    $dir      =  __DIR__ . '/*.*';
    $filelist =  glob($dir . '*');

    foreach ($filelist as $file) {
        if (is_file($file)) {
            //print($file);
            if ( basename($file) != "index.php" ){
                if ( basename($file) != "data.db" ){
					if ( basename($file) != "exploreRun.php" ){
                        if ( basename($file) != "upload.php" ){
                            if ( basename($file) != "index_delete_list.php" ){
                                if ( basename($file) != "delete.php" ){
                                    if ( basename($file) != "index_download_list.php" ){
                                        if ( basename($file) != "download.php" ){



$html_tags = '';
if ($f_cnt==1){
    $html_tags = $html_tags . '<input type="radio" name="f" value="' 
                    . basename($file) .  '" checked>';
} else {
    $html_tags = $html_tags . '<input type="radio" name="f" value="' 
                    . basename($file) .  '">';
}

                           
$html_tags = $html_tags . basename($file);

$html_tags = $html_tags . '</a>' ."\n";

print( $html_tags );
echo nl2br("\n");

$f_cnt += 1;

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

</form>


</body>
</html>
