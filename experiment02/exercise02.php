<?php
/**
 * 分别使用if-else if-else和switch语句，编写程序，实现输出：
 *     周一，新的一周开始啦！
 *     周五，周末到了，好好休息！
 *     周日，明天又要开始上课了！
 */

header("Content-Type: text/html;charset=utf-8");

date_default_timezone_set("UTC");
$weekday = date("w");

echo '<p>if else语句</p>';
if ($weekday == 1) {
    echo '周一，新的一周开始啦！';
} else if ($weekday == 5) {
    echo '周五，周末到了，好好休息！';
} else if ($weekday == 0) {
    echo '周日，明天又要开始上课了！';
} else {
    echo date("l");
}

echo '<br/>';
echo '<p>switch语句</p>';
switch ($weekday) {
    case 0:
        echo '周日，明天又要开始上课了！';
        break;
    case 1:
        echo '周一，新的一周开始啦！';
        break;
    case 5:
        echo '周五，周末到了，好好休息！';
        break;
    default:
        echo date("l");
        break;
}
