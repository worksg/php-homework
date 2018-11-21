<?php
/**
 * 创建一个函数f2($x)，用于求1到某数之和。
 * 然后调用该函数f2(200)，求1+2+3+….+200=？
 */
header("Content-Type: text/html;charset=utf-8");

function f2($x)
{
    $sum = 0;
    for ($i = 1; $i <= $x; $i++) {
        $sum += $i;
    }
    return $sum;
}

echo f2(200);
