<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	include("DatabaseConfig.php");
	$query="select * from users where user_name='$username' and password='$password'";
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	if($num==false){
		include("login.html");
		echo("<p style=\"Color: red\">INVALID USERNAME OR PASSWORD</p>");
		return;
	}
	$myid=mysql_result($result,0,"id");
	setCookie("user",$myid);
	//echo("<form target=_SELF>");
	echo(Header("location:TempFrameFormViewProfile.php?myid=$myid"))
	//echo("<html>");
	//echo("<body bgcolor=lightblue>");
		//echo("<form action=TempFrameFormViewProfile.php onLoad=myfunction()>");
			//echo("<input type=hidden name=myid value=$myid>");
			//echo("<button onClick=\"myfunction()\" id=do name=do>click me</button>");
		//echo("</form>");
		
	//echo("<a href=FrontProfile.php?myid=$myid target=main>GO</a>");
	
	//echo("</body>");
		
	//echo("<form target=_SELF>");
	//header("Window-target: _to");
	//header("Location:menu.html");

?>