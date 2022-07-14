<?php
//
// (目的)
//   自パスを開く __DIR__;
//
//
// (動作)
// C:\sys\explorerRun\bin\cmd.txt に
//  '' と書き込めればOK
//
// JavaScript でブラウザを閉じる


define("TESTFILE","C:/sys/explorerRun/bin/cmd.txt");
//$s=' /n,/e,/root,c:\sys';
$s=' /n,/e,/root,' . __DIR__ ;

file_put_contents(TESTFILE,$s);

var_dump(file_get_contents(TESTFILE));


?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <script>
function winClose(){
  window.open('about:blank', '_self').close()
}

winClose();
  </script>
</head>
<body>


<!-- <script src="winClose();"></script> -->
<!-- <div onclick="winClose();"></div> -->

<!-- Script が効かないとき-->
<a href="#" onclick="winClose();">Close</a>

</body>
</html>