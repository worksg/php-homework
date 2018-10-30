<?php

// 2、    使用array()函数定义数组$arr，元素值为(新浪、网易、腾讯、雅虎)，
// 对应的数组下标分别为(1，2，3，9)。

header("Content-Type: text/html;charset=utf-8");

$languages = array(1 => "新浪", 2 => "网易", 3 => "腾讯", 9 => "雅虎");

foreach ($languages as $key => $value) {
    echo $key, ' ', $value, '<br/>';
}
