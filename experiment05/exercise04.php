<?php
/**
 * 创建一个函数f1($x)，用于求某数阶乘。然后调用该函数f1(10)，求10！
 */
header("Content-Type: text/html;charset=utf-8");

function f1($x)
{
    $sum = 1;
    for ($i = 1; $i <= $x; $i++) {
        $sum = $sum * $i;
    }
    return $sum;
}

echo f1(10);
