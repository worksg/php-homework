<?php
    header("content-type:text/html;charset=utf-8");
	 $a = 1;
	$b = 4;
	$c = 2;
	
	$res_x1 = -$b+sqrt($b*$b-4*$a*$c)/(2*$a)        ;
	$res_x2 = -$b-sqrt($b*$b-4*$a*$c)/(2*$a)       ;
	
	echo "<p>\$a=$a \$b=$b \$c=$c </p>"   ;
	echo "<p>\$res_x1 = $res_x1 </p>"    ;
	echo "<p>\$res_x2 = $res_x2 </p>"   ;
?>