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
	echo("</center>");
	echo("<br>");
	echo("<b>Info</b>");
	
	
	echo("<table border=3>");
		echo("<tr>");
			echo("<td>Name</td>");
			echo("<td>$name</td>");	
		echo("</tr>");
		
		echo("<tr>");
			echo("<td>Last Name</td>");
			echo("<td>$lastname</td>");	
		echo("</tr>");
		
		echo("<tr>");
			echo("<td>HomeTown</td>");
			echo("<td>$hometown</td>");	
		echo("</tr>");
		
		echo("<tr>");
			echo("<td>Date of birth</td>");
			echo("<td>$dateofbirth</td>");	
		echo("</tr>");
		
		echo("<tr>");
			echo("<td>Current City</td>");
			echo("<td>$currentcity</td>");	
		echo("</tr>");
		
		echo("<tr>");
			echo("<td>RelationShip</td>");
			echo("<td>$relationship</td>");	
		echo("</tr>");
		
		echo("<tr>");
			echo("<td>Studies</td>");
			echo("<td>$studies</td>");	
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
			$fullname=$name." ".$lastname;
			echo("<input type=hidden name=userid value=$myid>");
			echo("<b style=\"Color:black\">$fullname</b>");
			echo("<textarea rows=9 cols=107 style=\"Color:green\" class=ta>  $text</textarea>");
			echo("<br>");
			echo("<br>");	
			
		}
	echo("</body>");	
?>