<head>
<link rel="stylesheet" type="text/css" href="demo.css">
</head>
<?php
	$id=$_GET['myid'];
	include("DatabaseConfig.php");
	$query="select * from users";
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	if($num==false){
		return;
	}
	echo("<body bgcolor=lightblue>");
	echo("<center><b style=\"font-family: 'Brush Script Std';\">ALL Users Of Our Site</b></center>");
	echo("<ul>");
	for($i=0;$i<$num;$i++){
		$myid=mysql_result($result,$i,"id");
		$name=mysql_result($result,$i,"name");
		$lastname=mysql_result($result,$i,"last_name");
		$fullname=$name."  ".$lastname;
		$gender=mysql_result($result,$i,"gender");
		if($gender=="male"){
			if($id==$myid){
				echo("<li><a href=myprofile.php?myid=$myid target=display><img src=\"pic/boy.png\" width=40 height=40>$fullname</a></li>");
			}
			else{
				echo("<li><a href=otherprofile.php?myid=$myid target=display><img src=\"pic/boy.png\" width=40 height=40>$fullname</a></li>");
			}
		}
		else{
			if($id==$myid){
				echo("<li><a href=myprofile.php?myid=$myid target=display><img src=\"pic/boy.png\" width=40 height=40>$fullname</a></li>");
			}
			else{
				echo("<li><a href=otherprofile.php?myid=$myid target=display><img src=\"pic/girl.png\" width=40 height=40>$fullname</a></li>");
			}
		}
		
	}
	echo("</ul>");
	echo("<body>");
?>