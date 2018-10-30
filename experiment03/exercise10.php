<?php

/**
 * 定义一个数组（一维，5个元素），使用赋值的方法，将其数组大小扩大为（一维，7个元素）；
 * 使用for循环语句，将其扩大为（一维，60个元素，并给每个元素赋值为1，2，3，4……60；
 */

header("Content-Type: text/html;charset=utf-8");

$a = array(1, 2, 3, 4, 5);
print_r($a);
echo '<br/>';

$a[5] = 6;
$a[6] = 7;
print_r($a);
echo '<br/>';

for ($i = 0; $i < 60; $i++) {
    $a[$i] = $i + 1;
}
print_r($a);
