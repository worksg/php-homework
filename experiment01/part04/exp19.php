<?php
	header("content-type:text/html;charset=utf-8");
//PHP变量无类型检查
$what="Fred";
echo "\$what的值=$what<br>";
if(is_string($what)) echo "\$what是字符串型变量<hr>";

$what=35;
echo "\$what的值=$what<br>";
if(is_int($what)) echo "\$what是整型变量<hr>";

$what=array('Fred','35','wilma');
echo "\$what的值为：<br>";
foreach($what as $e)
 echo "$e<br>";
if(is_array($what)) echo "\$what是数组型变量";
?>
