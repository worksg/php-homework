<?php
/**使用循环语句，编写程序，实现：求1-100的平方和 */

header("Content-Type: text/html;charset=utf-8");

$a = 1;
$sum = 0 ;
while ($a <= 100) {
    $a++;
    $sum += $a*$a;
}
echo 'The sum is: ' . $sum. '<br/>';