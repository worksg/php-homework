<?php

// 1、	将字符串"asp","php","jsp"赋给名为languages的数组，然后分别输出这三个元素。

header("Content-Type: text/html;charset=utf-8");

$languages  = array("asp","php","jsp");

foreach ($languages as $key => $value) {
    echo $key,' ',$value,'<br/>';
}