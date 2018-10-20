<?php
header("Content-Type: text/html;charset=utf-8");

function result($num)
{
    $sum = 1;
    for ($i = 1; $i <= $num; $i++) {
        $sum *= $i;
    }
    return $sum;
}

$e = 1;
for ($i = 1; $i < 20; $i++) {
    $e += 1 / result($i);
}

echo $e;
