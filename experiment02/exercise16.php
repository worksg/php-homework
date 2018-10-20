<?php
/**建立一个php文件，并测试include()函数；
 * 将一个长方形布料的尺寸(height=50,width=20)存放在文件area.php文件内，
 * 通过函数嵌套计算卖这块每平方价格为2.35元布料所需的钱数
 */

header("Content-Type: text/html;charset=utf-8");

function calc($height, $width)
{
    return $height * $width * 2.35;
}

include getcwd() . '/exercise16-area.php';

echo calc($height, $width);
