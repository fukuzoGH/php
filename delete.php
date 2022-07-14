<?php

//$f = (string)filter_input(INPUT_POST, 'f');
$f = filter_input(INPUT_POST, 'f');
//echo $f;

//if (isSet($_POST["f"])) {
//
//}

unlink($f); //ファイル削除

header("location: index.php"); //リダイレクト
