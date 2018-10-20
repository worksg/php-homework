<?php
/**利用continue语句，输出1-10之间不能被3整除的数 */

header("Content-Type: text/html;charset=utf-8");

for ($i = 1; $i <= 10; $i++) {
    if ($i % 3 != 0) {
        echo $i . '<br/>';
    } else {
        continue;
    }
}
