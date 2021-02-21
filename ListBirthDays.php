<head>
<link rel="stylesheet" type="text/css" href="demo.css">
</head>
<?php
	include("DatabaseConfig.php");
	$query="select * from users";
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	echo("<body bgcolor=lightgrey>");
	echo("<table border=3 align=center>");
	echo("<tr>");
		echo("<th>Name</th>");
		echo("<th>Date Of Birth</th>");
		echo("<th>Gift For BirthDay Boy/Girl From This WebSite</th>");
	echo("</tr>");
	$dat=date('Y-m-d');
	list($year,$month,$day)=split("-",$dat);
	for($i=0;$i<$num;$i++){
		$name=mysql_result($result,$i,"name");
		$lastname=mysql_result($result,$i,"last_name");
		$gender=mysql_result($result,$i,"gender");
		$dateofbirth=mysql_result($result,$i,"date_of_birth");
		list($userbirthdayyear,$userbirthdaymonth,$userbirthdayday)=split("-",$dateofbirth);
		$fullname=$name." ".$lastname;
		if($gender=="male"){
			echo("<tr>");
				echo("<th align=left><img src=\"pic/boy.png\" width=40 height=40>$fullname</th>");
				echo("<th>$dateofbirth</th>");
				if($userbirthdaymonth==$month && $userbirthdayday==$day){
					echo("<th><img src=\"pic/gift.png\"></th>");
				}
			echo("</tr>");
		}
		else if($gender=="female"){
			echo("<tr>");
				echo("<th align=left><img src=\"pic/girl.png\" width=40 height=40>$fullname</th>");
				echo("<th>$dateofbirth</th>");
				if($userbirthdaymonth==$month && $userbirthdayday==$day){
					echo("<th><img src=\"pic/gift.png\"></th>");
				}
			echo("</tr>");
		}
	}
	echo("</table>");
?>