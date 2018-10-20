<?php
/**利用continue语句，输出1-10之间不能被3整除的数 */

header("Content-Type: text/html;charset=utf-8");

for ($n = 1; $n <= 100; $n++) {
    if ($n % 10 != 0) {
        continue;
    }
    echo "您是第" . $n . "位给我留言的朋友<br/>";
}
