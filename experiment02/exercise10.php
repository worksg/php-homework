<?php
/**编写一个php网页，令它使用for循环找到1-200之间能被13整除的数字，然后将结果显示在网页上 */
header("Content-Type: text/html;charset=utf-8");

for ($i = 1; $i <= 200; $i++) {
    if ($i % 13 == 0) {
        echo $i . '<br/>';
    }
}
