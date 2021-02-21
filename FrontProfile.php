<?php
$myid=$_GET['myid'];
echo("<frameset rows=25%,70%>");
	echo("<frame src=\"menuandwelcome.php?myid=$myid\" noresize=\"noresize\" scrolling=\"no\" frameborder=\"1\"></frame>");
	echo("<frameset cols=20%,60%,20%>");
		echo("<frame src=\"Adds.html\" noresize=\"noresize\" scrolling=\"yes\" frameborder=\"1\" target=main></frame>");
		echo("<frame src=\"AllPosts.php?myid=$myid\" noresize=\"noresize\" scrolling=\"yes\" frameborder=\"1\" name=display></frame>");
		echo("<frame src=\"listallaccounts.php?myid=$myid\" noresize=\"noresize\" scrolling=\"yes\" frameborder=\"1\"></frame>");
	echo("</frameset>");
echo("</frameset>");
	
?>
