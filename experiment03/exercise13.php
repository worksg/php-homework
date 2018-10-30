<?php

/**
 * 定义一个数组，值分别为（1，1.2，-2.3，90.25），
 * 输出该数组；计算数组个元素的和；
 * 对数组元素按照值的大小分别进行升序和降序排列
 */

header("Content-Type: text/html;charset=utf-8");

$a = array(1, 1.2, -2.3, 90.25);
$a_sum = 0;
foreach ($a as $key => $value) {
    $a_sum += $value;
}
echo '数组元素的和: ';
print_r($a_sum);
echo '<br/>';

echo '升序排列: ';
$a = array(1, 1.2, -2.3, 90.25);
sort($a);
print_r($a);
echo '<br/>';

echo '降序排列: ';
rsort($a);
print_r($a);
echo '<br/>';
