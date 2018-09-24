<?php
	  header("content-type:text/html;charset=utf-8");
$a="这是一个字符串！";
echo gettype($a),'<p>';
$b=100;
echo gettype($b),'<p>';
$c=15.12;
echo gettype($c),'<p>';
$d=false;
echo gettype($d),'<p>';
$e=array(10,20,30);
echo gettype($e),'<p>';
?>
