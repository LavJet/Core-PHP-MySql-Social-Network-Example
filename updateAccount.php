<?php
	$myid=$_POST['myid'];
	$name=$_POST['name'];
	$lastname=$_POST['lastname'];
	$dateofbirth=$_POST['dateofbirth'];
	$hometown=$_POST['hometown'];
	$currentcity=$_POST['currentcity'];
	$relationship=$_POST['relationship'];
	$studies=$_POST['study'];
	include("DatabaseConfig.php");
	$query="update users set name='$name', last_name='$lastname' , date_of_birth='$dateofbirth' , place_of_birth='$hometown' , living_place='$currentcity' , relationship='$relationship' , study='$studies' where id=".$myid;
	$result=mysql_query($query);
	if($result==true){
		echo(header("location:myprofile.php?myid=$myid"));
	}
	else{
		echo("ERROR IN QUERY OF DATE FORMATE INVALID");
	}
?>