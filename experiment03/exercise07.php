<?php

// 创建并输出数组
// $arr[0]=a $arr[1]=b $arr[2]=c $arr[3]=d

header("Content-Type: text/html;charset=utf-8");

$arr = array();
$arr[0] = 'a';
$arr[1] = 'b';
$arr[2] = 'c';
$arr[3] = 'd';

print_r($arr);

// foreach ($arr as $key => $value) {
//     echo $value.'<br/>';
// }
