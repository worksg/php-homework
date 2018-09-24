<?php
    header("content-type:text/html;charset=utf-8");
	$var_ = 0    ;
		echo   "<p>\$var_=".$var_ ."</p>"; ;
		echo   "<p>\$var_=".++$var_ ."</p>"; 
echo "<p>".gettype($var_)."</p>";
	echo   "<p>\$var_=".$var_+=1.3 ."</p>"; 
echo "<p>".gettype($var_+1.3)    ."</p>"  ;
?>