<?php
	  header("content-type:text/html;charset=utf-8");
//转换成浮点形用（bool）或(boolean)
$a=0.0;
if($a){echo '$a:true.';}else {echo '$a:false.';} 
$b=0;
if((bool)$b){echo '$b:true.';}else {echo '$b:false.';} 
$c=10;
if($c){echo '$c:true.';}else {echo '$c:false.';} 
$d=array();
if((bool)$d){echo '$d:true.';}else {echo '$d:false.';} 
$e="";
if((bool)$e){echo '$e:true.';}else {echo '$e:false.';} 
$f=null;
if((bool)$f){echo '$f:true.';}else {echo '$f:false.';} 
?>
