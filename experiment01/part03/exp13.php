<?php
	  header("content-type:text/html;charset=utf-8");
$x=2.5;
if(is_int($x)) echo '$x是整型变量';
if(is_float($x)) echo '$x是浮点型变量';
if(is_string($x)) echo '$x是字串型变量';
if(is_bool($x)) echo '$x是布尔型变量';
if(is_array($x)) echo '$x是数组型变量';
if(is_object($x)) echo '$x是对象型变量';
if(is_resource($x)) echo '$x是资源型变量';
if(is_null($x)) echo '$x是NULL型变量';
?>
