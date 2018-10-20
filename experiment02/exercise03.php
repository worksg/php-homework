<?php
/**
 * 编写一个PHP网页令它根据如下公式计算邮资，
 * 例如：重量为700克的信件应该缴纳108元邮资，
 * 倘若超过2000克，则显示无法处理信息（提示：请使用switch判断结果）
 * 不超过20克                             邮资7元
 * 超过20克但不超过100克                   邮资17元
 * 超过100克但不超过250克                  邮资32元
 * 超过250克但不超过500克                  邮资62元
 * 超过500克但不超过1000克                 邮资108元
 * 超过1000克但不超过2000克                邮资176元！
 */

header("Content-Type: text/html;charset=utf-8");

$weight = 700;
switch (true) {
    case $weight < 20:
        echo '邮资7元';
        break;
    case $weight < 100:
        echo '邮资17元';
        break;
    case $weight < 250:
        echo '邮资32元';
        break;
    case $weight < 500:
        echo '邮资62元';
        break;
    case $weight < 1000:
        echo '邮资108元';
        break;
    case $weight < 2000:
        echo '邮资176元';
        break;
    default:
        echo '无法处理信息';
        break;
}
