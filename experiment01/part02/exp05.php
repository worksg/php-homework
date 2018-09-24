<?php  header("content-type:text/html;charset=utf-8");
#PHP嵌入方法一例： 
$myname="孙寿龙";
$myoperation="确定";
?>
<input type="text" name="myname" value="<?php echo $myname;?>">
<input type="button" name="mybutton" value="<?php echo $myoperation;?>">
