<?php

// PDO 公式
// https://www.php.net/manual/ja/class.pdo.php
//

function test01() {
    try {
        $addr = 'mysql:host=localhost; dbname=testdb; port=1306; ';
        $user = 'root';
        $pass = 'password';

        // 接続
        $pdo = new PDO($addr, $user, $pass);
        
        $state = $pdo->query('SET NAMES utf-8');
    }
    catch(PDOException $e){
            echo "database open error: $addr\n $user\n" . $e->getMessage();
    }
        $pdo = NULL;    // 切断
}

//データベースに接続する
test01();