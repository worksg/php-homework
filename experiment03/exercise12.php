<?php

/**
 * 定义2个数组$a=array("a","b","c")，$b=array("d","e","f","g","h")，
 * 使用array_merge()函数，合并2个数组，使用默认下标；
 * 如何改变数组定义方式，使合并后数组包含的元素是"a","d","e","f","g","h"？
 */

header("Content-Type: text/html;charset=utf-8");

$a = array("a", "b", "c");
$b = array("d", "e", "f", "g", "h");
print_r(array_merge($a, $b));
echo '<br/>';

$a = array("a", 'a1' => "b", 'a2' => "c");
$b = array('a1' => "d", 'a2' => "e", "f", "g", "h");
print_r(array_merge($a, $b));
