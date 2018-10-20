<?php
/**
 * 使用if else分支控制语句，编写程序，实现给变量a，b分别赋值13、5，
 * 比较a，b两个数的大小。
 * 如果a>b，输出：a大于b；否则输出：a小于b。
 */

header("Content-Type: text/html;charset=utf-8");

$a = 13;
$b = 5;

if ($a > $b) {
    echo 'a大于b';
} else {
    echo 'a小于b';
}
