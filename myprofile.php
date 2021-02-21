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
	$fullname=$name." ".$lastname;
	if($hometown==null){
		$hometown="NOT UPDATED";
	}
	if($dateofbirth==null){
		$dateofbirth="NOT UPDATED";
	}
	if($currentcity==null){
		$currentcity="NOT UPDATED";
	}
	if($relationship==null){
		$relationship="NOT UPDATED";
	}
	if($studies==null){
		$studies="NOT UPDATED";
	}
	
	
	echo("<body bgcolor=lightgrey>");
	echo("<center>");
	echo("<h3>$fullname</h3>");
	echo("<table border=5>");
	if($gender=="female"){
		echo("<tr>");
		echo("<td><img src=\"pic/girl.png\" width=120 height=140></td>");
		echo("</tr>");
	}
	else{
		echo("<tr>");
			echo("<td><img src=\"pic/boy.png\" width=120 height=150></td>");
		echo("</tr>");
	}
	echo("</table>");
	echo("<form action=ChangeProfilePic.php>");
		echo("<input type=file name=pic></input>");
		echo("<br>");
		echo("<input type=submit value=\"Change It\">");
		echo("<input type=hidden name=myid value=$myid>");
	echo("</form>");
	
	
	echo("</center>");
	echo("<br>");
	echo("<b>Info</b>");
	echo("<table border=3>");
		echo("<tr>");
			echo("<td class=tf>Name</td>");
			echo("<td class=tf>$name</td>");	
		echo("</tr>");
		
		echo("<tr>");
			echo("<td class=tf>Last Name</td>");
			echo("<td class=tf>$lastname</td>");	
		echo("</tr>");
		
		echo("<tr>");
			echo("<td class=tf>HomeTown</td>");
			echo("<td class=tf>$hometown</td>");	
		echo("</tr>");
		
		echo("<tr>");
			echo("<td class=tf>Date of birth</td>");
			echo("<td class=tf>$dateofbirth</td>");	
		echo("</tr>");
		
		echo("<tr>");
			echo("<td class=tf>Current City</td>");
			echo("<td class=tf>$currentcity</td>");	
		echo("</tr>");
		
		echo("<tr>");
			echo("<td class=tf>RelationShip</td>");
			echo("<td class=tf>$relationship</td>");	
		echo("</tr>");
		echo("<tr>");
			echo("<td class=tf>Studies</td>");
			echo("<td class=tf>$studies</td>");	
		echo("</tr>");
	echo("</table>");
	echo("<br>");
	echo("<br>");
	echo("<br>");
		$queryformyposts="select * from posts where users_id=$myid ORDER BY (id) DESC ";
		$resultofmyposts=mysql_query($queryformyposts);
		$num=mysql_num_rows($resultofmyposts);
		if($num==false){
			echo("No Any Post Done Yet !!!!");
			echo("<br>");
			echo("<br>");
			echo("<br>");			
			return;
		}
		for($i=0;$i<$num;$i++){
			$text=mysql_result($resultofmyposts,$i,"text");
			$postid=mysql_result($resultofmyposts,$i,"id");
			$fullname=$name." ".$lastname;
			echo("<form action=deletepost.php method=post>");
			echo("<input type=hidden name=postid value=$postid>");
			echo("<input type=hidden name=userid value=$myid>");
			echo("<b style=\"Color:black\">$fullname</b>");
			echo("<textarea rows=9 cols=107 style=\"Color:green\" class=ta>  $text</textarea>");
			echo("<input type=submit value=Delete>");
			echo("<br>");
			echo("<br>");	
			echo("</form>");
		}
	echo("</body>");	
?>