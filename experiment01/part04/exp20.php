<?php
	header("content-type:text/html;charset=utf-8");
//一个没有设置值的变量，它的值是NULL，表示它是一个空变量
$n1=null;
if($n1==NULL)
 //此句也可转换为: if(is_null($n1))
  echo "\$n1是空变量!";
?>
