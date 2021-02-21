<?php
	$name=$_POST['name'];
	$lastname=$_POST['lastname'];
	$username=$_POST['username'];
	$password1=$_POST['password'];
	$password2=$_POST['passwordagain'];
	$dateofbirth=$_POST['dateofbirth'];
	$gender="";
	if(isset($_POST['gender'])){
		$gender=$_POST['gender'];
	}
	else{
		include("registrationform.html");
		echo("<center><b style=\"Color: red\">Please Select The gender<b></center>");
		return;
	}
	if($name==""){
		include("registrationform.html");
		echo("<center><b style=\"Color: red\">Sorry Please Enter the Name<b></center>");
		return;
	}
	if($lastname==""){
		include("registrationform.html");
		echo("<center><b style=\"Color: red\">Sorry Please Enter the Last Name<b></center>");
		return;
	}
	if($username==""){
		include("registrationform.html");
		echo("<center><b style=\"Color: red\">Sorry Please Enter the User Name<b></center>");
		return;
	}
	if($password1==""){
		include("registrationform.html");
		echo("<center><b style=\"Color: red\">Sorry Please Enter the Password<b></center>");
		return;
	}
	if($password2==""){
		include("registrationform.html");
		echo("<center><b style=\"Color: red\">Sorry Please Re Type the Password<b></center>");
		return;
	}
	if($gender==null){
		include("registrationform.html");
		echo("<center><b style=\"Color: red\">Sorry Please Select The Gender<b></center>");
		return;
	}
	if($dateofbirth==""){
		include("registrationform.html");
		echo("<center><b style=\"Color: red\">Sorry Please Select The Date Of Birth<b></center>");
		return;
	}
	if($password1!=$password2){
		include("registrationform.html");
		echo("<center><b style=\"Color: red\">Password Does Not Match<b></center>");
		return;
	}
	include("DatabaseConfig.php");
	$query="insert into users(user_name,password,name,last_name,gender,date_of_birth) values('".$username."','".$password1."','".$name."','".$lastname."','".$gender."','".$dateofbirth."')";
	$result=mysql_query($query);
	if($result==true){
		echo("<body bgcolor=lightblue>");
		echo("<center><h1>Thanku For Registration</h1></center>");
		echo("<marquee>Now You Are Member Of our site ... you can see the post of all users</marquee>");
		echo("</body>");
	}
	if($result==false){
		include("registrationform.html");
		echo("<center>");
		echo("<b style=\"Color: red\">username already exits</b>");
		echo("</center>");
		return;
	}
?>