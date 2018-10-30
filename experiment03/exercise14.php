<?php

/**
 * 将下列信息存放在一个二维数组中，然后遍历输出；
 * 张三  李四  王五  赵六
 * 86     90    82   85
 */

header("Content-Type: text/html;charset=utf-8");

$languages = array('张三' => 86, '李四' => 90, '王五' => 82, '赵六' => 85);

foreach ($languages as $key => $value) {
    echo $key, ' ', $value, '<br/>';
}
