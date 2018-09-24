<?php
	header("content-type:text/html;charset=utf-8");
$a=10;
$b=3;
$num1=$a+$b;  //将$a+$b的结果赋值给$num1，$num1的值为13
$num2=($c=6)+4;    // $c的值为6，$num2的值为10
echo "$num1\t"."$num2\t"."$c\t";
$a+=6;       //等同于$a=$a+6，$a的值为16
echo "$a\t";
$b-=2;       //等同于$b=$b-2，$b的值为1
echo "$b\t";
$a*=2;      //等同于$a=$a*2，$a的值为32
echo "$a\t";
$b/=0.5;    //等同于$b=$b/0.5，$b的值为2
echo "$b\t";
$string="连接";
$string.="字符串";      //等同于$string=$string ."字符串"，string的值为“连接字符串”
echo "$string\t";
?>
