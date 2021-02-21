<?php
	$myid=$_GET['myid'];
	echo("<form target=_self>");
	echo("<frameset target=main>");
		echo("<frame target=main src=FrontProfile.php?myid=$myid></frame>");
	echo("</frameset>");
	echo("<form>");
	//echo(header("location:index.html"));
?>