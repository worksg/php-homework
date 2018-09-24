<?php  
	                    header("content-type:text/html;charset=utf-8");
	             $head = ''       ;
	             $body = ''       ;
	$head_ = array(0=>"学号",1=>"姓名",2=>"性别");
	$body_ = array(array("081101","王林","男"),array("081102","程明","男"));
	           foreach($head_ as $e)
	           	   $head .= "<th>". $e ."</th>"  ;
	           	           foreach($body_ as $e)    {
	           	           	   $body .= "<tr>";
	           	           	   foreach($e as $n)  
	           	   $body .= "<th>". $n ."</th>"  ;      
	           	   		    $body .= "</tr>";       }
echo "<table border=1><thead><tr>$head</tr></thead><tbody>$body</tbody></table>";
	
?>