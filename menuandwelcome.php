<?php
	$myid=$_GET['myid'];
	include("DatabaseConfig.php");
	$query="select * from users where id=$myid";
	$result=mysql_query($query);
	if($result==false){
		echo("ERROR");
		return;
	}
	$num=mysql_num_rows($result);
	if($num==false){
		return;
	}
	$name=mysql_result($result,0,"name");
	$lastname=mysql_result($result,0,"last_name");
	$fullname=$name." ".$lastname;
	include("menu.php");
	echo("<br>");
	echo("<b><pre size=10>										<img src=\"pic/welcome.gif\" width=150></pre></b>");
	echo("<marquee direction=right><b>Thanku For Login $fullname</b></marquee>");
	echo("<center><b>$fullname</b></center>");
	?>