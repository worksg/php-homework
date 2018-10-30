<?php

/**
 * 将下列信息存放在一个二维数组中
 * 张三  李四  王五  赵六
 * 86     90    82   85
 * 将上面的学生成绩定义一个数组，显示其数组个数，然后降序排列
 */

header("Content-Type: text/html;charset=utf-8");

$score = array('张三' => 86, '李四' => 90, '王五' => 82, '赵六' => 85);

echo '降序排列<br/>' . '数组个数: ' . sizeof($score) . '<br/>';
arsort($score);
foreach ($score as $key => $value) {
    echo $key, ' ', $value, '<br/>';
}
