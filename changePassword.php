<head>
<link rel="stylesheet" type="text/css" href="demo.css">
</head>
<body bgcolor=lightgray>
<form action=changepasswordligic.php method=post>
<?php
	$myid=$_GET['myid'];
	echo("<input type=hidden name=myid value=$myid>");	
?>
	<br>
	<br>
	<br>
	
	<center>
		<table border=3>
			<tr>
				<th>Change Password</th>
			</tr>
			<tr>
				<td align=center>Old Password<input type=password name=oldpassword class=tf></td>
			</tr>
			<tr>
				<td align=center>New Password<input type=password name=password1 class=tf></td>
			</tr>
			<tr>
				<td align=center>Confrm Password<input type=password name=password2 class=tf></td>
			</tr>
			<tr>
				<td align=center><input type=submit value="Change Password" class=bt style="font-size: 14; width:140px; height: 30px;"></td>
			</tr>
		</table>
	</center>
	</body>
<?php

?>	