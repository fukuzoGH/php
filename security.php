<?php
//
//
//


//参考資料)
// https://qiita.com/mpyw/items/2f9955db1c02eeef43ea
//
//
//
//

function h($str) {
    //XSS対策

/* ex)
    <p><?php echo h($str); ?></p>
*/
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
