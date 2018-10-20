<?php
/**建立一个文件include.php，使之输出字符“php代码！”，
 * 再建立另外一个PHP程序，使之包含文件“include.php”，
 * 最后输出结果为“利用包含文件输出php代码！”
 */

header("Content-Type: text/html;charset=utf-8");

include getcwd() . '/exercise15-include.php';
