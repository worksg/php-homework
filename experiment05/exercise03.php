<?php
/**
 * 创建一个函数add($x,$y)，用于求2个数相加之和，其中：$x,$y为2个加数。
 * 然后调用该函数，求add(1，16)
 */
header("Content-Type: text/html;charset=utf-8");

function add($x, $y)
{
    return $x + $y;
}

echo add(1, 16);
