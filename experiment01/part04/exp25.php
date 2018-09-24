<?php
	header("content-type:text/html;charset=utf-8");
//理解$a++与++$a的区别 
$a=5;
echo ++$a;   //输出6
echo $a;     //输出6
$a=5;
echo $a++;   //输出5
echo $a;     //输出6
echo "<br>";
$x=2;
$y=3;
$z=++$x+$y;  
echo "$z\t"."$x\t"; //此时$z=6,$x=3
$x=2;
$y=3;
$z=$y+$x++;  
echo "$z\t"."$x\t"; //此时$z=5,$x=3
?> 
