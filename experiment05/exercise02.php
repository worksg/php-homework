<?php
/**
 * 创建一个函数sales($price,$number)，用于求购买的商品总价格，
 * 其中：$price单价，$number是购买的商品数量。
 * 然后，调用该函数，求sales(5.2,20)。
 */
header("Content-Type: text/html;charset=utf-8");

function sales($price, $number)
{
    return $price * $number;
}

echo sales(5.2, 20);
