<?php
/**
 * 5、    定义一个数组，数组元素包括
 * "星期一","星期二","星期三","星期四","星期五","星期六","星期日",
 * 使用foreach语句，网页上显示：
 * 今天是：星期一
 * 今天是：星期二
 * ......
 * 今天是：星期日
 *
 */
header("Content-Type: text/html;charset=utf-8");

$subject = array("星期一", "星期二", "星期三", "星期四", "星期五", "星期六", "星期日");

foreach ($subject as $key => $value) {
    echo '今天是: ', $value, '<br/>';
}
