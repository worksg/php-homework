<?php
	header("content-type:text/html;charset=utf-8");
//转换自身类型并保值
$a="5";
if(is_string($a)) 
echo "开始,\$a是字符串型，值为:$a<br>";
$a=(int)$a;
if(is_int($a)) 
echo "转换类型并自赋值后,\$a是整型，值为:$a<br>";
?>
