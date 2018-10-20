<?php
/**利用break语句，计算半径为小于10的整数，面积在200以内的圆的面积 */

header("Content-Type: text/html;charset=utf-8");

$a = 1;
while ($a <= 10) {
    $area = pi() * pow($a, 2);
    if ($area < 200) {
        echo '半径:' . $a . "面积:" . $area . '<br/>';
    } else {
        break;
    }
    $a++;
}
