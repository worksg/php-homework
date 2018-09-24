<?php
    header("content-type:text/html;charset=utf-8");
$a = false;
$b = 3.56;
$c = 3.56e3;
$d = "welcome";

echo "<p>原数值</p>" ;
echo "\$a: " .$a    . "<br/>"      ;
echo "\$b: "         .$b  .  "<br/>";
echo "\$c: "       .$c .  "<br/>" ;
echo "\$d: "     .$d . "<br/>"   ;

echo "<p>转换为整型</p>" ;
echo "\$a: " .(int)$a    . "<br/>"      ;
echo "\$b: "         .(int)$b  .  "<br/>";
echo "\$c: "       .(int)$c .  "<br/>" ;
echo "\$d: "     .(int)$d . "<br/>"   ;

echo "<p>转换为浮点型</p>" ;
echo "\$a: " .(float)$a    . "<br/>"      ;
echo "\$b: "         .(float)$b  .  "<br/>";
echo "\$c: "       .(float)$c .  "<br/>" ;
echo "\$d: "     .(float)$d . "<br/>"   ;


echo "<p>转换为布尔型</p>" ;
echo "\$a: " .(bool)$a    . "<br/>"      ;
echo "\$b: "         .(bool)$b  .  "<br/>";
echo "\$c: "       .(bool)$c .  "<br/>" ;
echo "\$d: "     .(bool)$d . "<br/>"   ;

?>