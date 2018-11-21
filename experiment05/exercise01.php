<?php
/**
 * 创建一个函数，使其能够输出1-10之间的偶数，并调用该函数
 */
header("Content-Type: text/html;charset=utf-8");

function output()
{

    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo "<p>" . $i . "</p>";
        }
    }
}

output();
