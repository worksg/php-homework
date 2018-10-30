<?php

// 用array()函数建立一个二维数组（2行4列），元素值分别为：
// 北京 上海  天津 重庆
// 广州 深圳  南京 宁波
// 输出数组；

header("Content-Type: text/html;charset=utf-8");

$location = array(array("北京", "上海", "天津", "重庆"), array("广州", "深圳", "南京", "宁波"));

foreach ($location as $key => $value) {
    // print_r($value);
    foreach ($value as $skey => $svalue) {
        echo "$svalue ";
    }
    echo '<br/>';
}
