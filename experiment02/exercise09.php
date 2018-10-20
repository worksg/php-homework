<?php
/**编写一个php网页，令它使用while循环计算4096是2的几次方，然后将结果显示在网页上 */
header("Content-Type: text/html;charset=utf-8");

$i = -1;
while (true) {
    if (pow(2, ++$i) == 4096) {
        echo "2的" . $i . "次方";
        break;
    }
}
