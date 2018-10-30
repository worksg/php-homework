<?php
// 4、    定义一个数组，包括（语文、数学、英语、政治），遍历数组并分行显示数组元素内容。

header("Content-Type: text/html;charset=utf-8");

$subject = array("语文", "数学", "英语", "政治");

foreach ($subject as $key => $value) {
    echo $value, '<br/>';
}
