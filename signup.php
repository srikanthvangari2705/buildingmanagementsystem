<?php
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$uname=$_POST["uname"];
	$email=$_POST["email"];
	$mobile=$_POST["mobile"];
	
	
	echo"<br /> SUCCESSFULLY REGISTERED";
	
	echo"<br /> Your Details are as follows...";
	
	echo"<br /> fname ".$fname;
	echo"<br /> lname ".$lname;
	echo"<br /> uname ".$uname;
	echo"<br /> email ".$email;

	  
	
	
	echo"<br /> <a href='form.html'> Login here</a>";
?>