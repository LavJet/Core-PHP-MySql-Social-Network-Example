<?php
	$myid=$_GET['myid'];
	$texttobeposted=$_GET['texttobeposted'];
	include("DatabaseConfig.php");
	$query="insert into posts(text,users_id) values('".$texttobeposted."',".$myid.")";
	$result=mysql_query($query);
	if($result==true){
		include("AllPosts.php");
	}

?>