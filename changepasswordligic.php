<?php
	$myid=$_POST['myid'];
	$oldpassword=$_POST['oldpassword'];
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];
	include("DatabaseConfig.php");
	$query="select * from users where id=$myid";
	$result=mysql_query($query);
	if($result==false){
		echo("ERROR IN QUERY");
		return;
	}
	$num=mysql_num_rows($result);
	$realoldpassword=mysql_result($result,0,"password");
	echo("<body bgcolor=lightgray>");
	if($realoldpassword!=$oldpassword){
		echo("Sory Old Password Does Not Match");
		return;
	}
	if($password1 !=$password2){
		echo("password1 is not equal to password2");
		return;
	}
	$query="update users set password='$password1' where id=$myid";
	$result=mysql_query($query);
	if($result==true){
		echo("PASSWORD UPDATED");
	}
	
?>

