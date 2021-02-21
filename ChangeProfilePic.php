<?php
	$userid=$_GET['myid'];
	$target_dir="profilepic/";
	$target_dir = $target_dir.basename( $_FILES['pic']["name"]);
	//echo($target_dir);
	
	//move_uploaded_file($_FILES["file"]["tmp_name"],$target_dir."sadasd.jpg");
?>