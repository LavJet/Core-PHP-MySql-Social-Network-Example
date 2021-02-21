<?php
	session_start();
	if(!isset($_COOKIE['user'])){
		echo("ERROR");
		return;
	}
	setCookie("user","ok",time()-3600);
	
	echo(header('Window-target: _parent'));
	echo(header("location:index.html"));
?>