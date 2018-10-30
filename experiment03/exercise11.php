<?php

/**
 * 定义一个数组$input=array("1","2","3","4")；
 * 使用array_splice将数组拆分获取前两个元素作为新的数组；
 * 写出array_slpice($input,1,-1)结果；
 * 写出array_splice($input,-3,2)结果。
 */

header("Content-Type: text/html;charset=utf-8");

$input = array("1", "2", "3", "4");
print_r($input);
echo '<br/>';

$i2 = array_splice($input, 2, 4);
$i1 = array_splice($input, 0, 2);
print_r($i1);
echo '<br/>';
print_r($i2);
echo '<br/>';

echo '<br/>';

$input = array("1", "2", "3", "4");
echo 'array_splice($input, 1, -1)' . '<br/>';
print_r(array_splice($input, 1, -1));
echo '<br/>';

echo 'array_splice($input, -3, 2)' . '<br/>';
print_r(array_splice($input, -3, 2));
echo '<br/>';
