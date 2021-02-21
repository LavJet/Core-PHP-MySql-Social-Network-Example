<?php
	$postid=$_POST['postid'];
	$myid=$_POST['userid'];
	include("DatabaseConfig.php");
	$querry="Delete from posts where id=$postid";
	$result=mysql_query($querry);
	if($result==false){
		echo("ERROR");
		return;
	}
	echo(header("location:myprofile.php?myid=$myid"));
	
	
	

?>