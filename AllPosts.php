<head>
<link rel="stylesheet" type="text/css" href="demo.css">
</head>
<?php
	$myid=$_GET['myid'];
	echo("<body bgcolor=lightgrey>");
		echo("<form action=post.php>");
			echo("<b style=\"Color: blue\">Whats On Your Mind !!</b>");
			echo("<input type=hidden name=myid value=$myid>");
			echo("<textarea rows=9 cols=107 style=\"Color: darkblue\" name=texttobeposted class=ta placeholder=\"    Whats On your Mind!!! \"></textarea>");	
			echo("<input type=submit value=Post><br>");
			echo(".......................................................................................Others Posts.......................................................................................<br>");
		include("DatabaseConfig.php");
		$query="select * from posts ORDER BY (id) DESC";
		$result=mysql_query($query);
		$num=mysql_num_rows($result);
		for($i=0;$i<$num;$i++){
			$userid=mysql_result($result,$i,"users_id");
			$text=mysql_result($result,$i,"text");
			$queryforusername="select * from users where id=$userid";
			$resultofuser=mysql_query($queryforusername);
			$username=mysql_result($resultofuser,0,"name");
			$lastname=mysql_result($resultofuser,0,"last_name");
			$fullname=$username." ".$lastname;
			echo("<b style=\"Color:black\">$fullname</b>");
			echo("<textarea rows=9 cols=107 style=\"Color:green\" class=ta>   $text</textarea>");
			echo("<br>");
			echo("<br>");	
		}
	echo("</body>");
?>