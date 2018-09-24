<?php
	  header("content-type:text/html;charset=utf-8");
//转换成浮点形用（string）
$a=true;
echo '$a:'.(string)$a ."<br>";
$b=false;
echo '$b:'.(string)$b."<br>";
$c=1041;
echo '$c:'.(string)$c."<br>";
$d=3.45e5;
echo '$d:'.(string)$d."<br>";
$e="3.45e5";
echo '$e:'.(string)$e."<br>";
$f=array(100,200);
echo '$f:'.(string)$f."<br>";
echo 'NULL:'.(string)null."<br>";
?>
