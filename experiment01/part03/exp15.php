<?php
	  header("content-type:text/html;charset=utf-8");
//转换成整形用（int）或（integer）
$a=true;
echo '$a:'.(int)$a ."<br>";
$b=false;
echo '$b:'.(int)$b."<br>";
echo 10-$a."<br>";
$c=10.01;
echo '$c:'.(int)$c."<br>";
$d="3.45e5";
echo '$d:'.(int)$d."<br>";
$e=3.45e5;
echo '$e:'.(int)$e."<br>";
$f="string1000";
echo '$f:'.(int)$f."<br>";
$g="-15.3e11";
echo '$g:'.(int)$g;
?>
