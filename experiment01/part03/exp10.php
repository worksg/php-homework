<?php    header("content-type:text/html;charset=utf-8");
$name="张三";
echo "Hi,$name<br>"; //双引号中的变量值将被输出
echo "Hi,\$name<br>"; //在双引号中加了反斜杠后就不一样了
echo 'Hi,$name';//单引号中的变量名将被输出,因为单引号不认为$name是变量
?>