<?php
	  header("content-type:text/html;charset=utf-8");
//转换成浮点形用（float）或 (double)或（real）
$a=true;
echo '$a:'.(float)$a ."<br>";
$b=false;
echo '$b:'.(float)$b."<br>";
$c=10;
echo '$c:'.(float)$c."<br>";
$e=3.45e5;
echo '$e:'.(float)$e."<br>";
$f="string1000";
echo '$f:'.(float)$f."<br>";
$g="-15.3e5";
echo '$g:'.(float)$g."<br>";
$h="-15.3a11";
echo '$h:'.(float)$h."<br>";
$i="-153a11";
echo '$i:'.(float)$i;
?>
