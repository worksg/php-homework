<?php

/**
 * 使用array_search()函数查找数组的元素值；
 * 定义数组$a，其元素值为（a1、b2、c3、d4），并查找数组中是否含有b2，则返回其位置；
 * 如果不含，则数组“在数组中未发现字符b2”
 */

header("Content-Type: text/html;charset=utf-8");

$a = array("a1", "b2", "c3", "d4");

$b = array_search("b2", $a);

if ($b != "") {
    echo "索引值: " . $b;
} else {
    echo "在数组中未发现字符b2";
}
