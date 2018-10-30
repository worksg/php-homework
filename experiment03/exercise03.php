<?php

header("Content-Type: text/html;charset=utf-8");

echo '数字下标<br/>';
print_r(array("asp", "php", "jsp"));
echo '<br/>';

echo '字符串下标<br/>';
print_r(array('a' => "新浪", 'b' => "网易", 'c' => "腾讯", '0' => "雅虎"));
echo '<br/>';

echo '数字和字符串混合使用下标<br/>';
print_r(array('a' => "php中文社区", 'b' => "网易", 'c' => "腾讯", 0 => "雅虎", 'e' => "百度", 1 => "搜狐", 9 => "游戏网"));
echo '<br/>';
