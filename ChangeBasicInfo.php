<head>
<link rel="stylesheet" type="text/css" href="demo.css">
</head>
<?php
	$myid=$_GET['myid'];
	include("DatabaseConfig.php");
	$query="select * from users where id=".$myid;
	$result=mysql_query($query);
	
	$gender=mysql_result($result,0,"gender");
	$name=mysql_result($result,0,"name");
	$lastname=mysql_result($result,0,"last_name");
	$hometown=mysql_result($result,0,"place_of_birth");
	$dateofbirth=mysql_result($result,0,"date_of_birth");
	$currentcity=mysql_result($result,0,"living_place");
	$relationship=mysql_result($result,0,"relationship");
	$studies=mysql_result($result,0,"study");
	
	echo("<body bgcolor=lightgrey>");
	echo("<center>");
		echo("<h2 style=\"font-family: 'Brush Script Std';\">UPDATE YOUR SELF</h2>");
		echo("<form method=post action=updateAccount.php>");
		echo("<input type=hidden name=myid value=$myid>");
		echo("<table border=2>");
			
			echo("<tr>");
				echo("<td>Name</td>");
				echo("<td><input type=text name=name value=$name class=tf></td>");
			echo("</tr>");
			
			echo("<tr>");
				echo("<td>Last Name</td>");
				echo("<td><input type=text name=lastname value=$lastname class=tf></td>");
			echo("</tr>");
			
			echo("<tr>");
				echo("<td>Date Of Birth</td>");
				echo("<td><input type=date name=dateofbirth value=$dateofbirth class=tf></td>");
			echo("</tr>");
			
			echo("<tr>");
				echo("<td>HomeTown</td>");
				echo("<td><input type=text name=hometown value=$hometown class=tf></td>");
			echo("</tr>");
			
			echo("<tr>");
				echo("<td>Current City</td>");
				echo("<td><input type=text name=currentcity value=$currentcity class=tf></td>");
			echo("</tr>");
			
			echo("<tr>");
				echo("<td>RelationShip</td>");
				echo("<td><input type=text name=relationship value=$relationship class=tf></td>");
			echo("</tr>");
			
			echo("<tr>");
				echo("<td>Study</td>");
				echo("<td><input type=text name=study value=$studies class=tf></td>");
			echo("</tr>");
		echo("</table>");
		echo("<br>");
		echo("<input type=submit value=\" Update My Account \" class=bt style=\"font-size: 14; width:140px; height: 30px;\">");
		echo("</form>");
	echo("</center>");
?>