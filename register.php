<?php
//ob_flush();
$errors=array();
$errors=="";
if(isset($_POST["submit"])){
	if (empty($_POST["fname"])) {
		$errors["fname1"] = "firstName is required";
		}
		else{
			$firstname=$_POST["fname"];
			}
		if (empty($_POST["lname"])) {
		$errors["lname1"] = "lastName is required";
		}
		else{
			$lastname=$_POST["lname"];
			}
		if (empty($_POST["uname"])) {
		$errors["uname1"] = "username is required";
		}
		else{
			$username=$_POST["uname"];
			}
		if (empty($_POST["email"])) {
		$errors["email1"] = "email is required";
		}
		else{
			$email=$_POST["email"];
			}
		if (empty($_POST["pwd"])) {
		$errors["pwd1"] = "please enter your password";
		}
		if (empty($_POST["cpwd"])) {
		$errors["cpwd1"] = "please confirm your password";
		}
		else{
			$password=$_POST["pwd"];
			}
		if (empty($_POST["mobile"])) {
		$errors["mbl"] = "please enter your mobilenumber";
		}
		else{
			$mobilenumber=$_POST["mobile"];
			}
if(count($errors) == 0){
	$conn = mysqli_connect("localhost", "root",""); 
mysqli_select_db($conn,"usersdb"); 
if ($conn) { 
 
 $result1 =mysqli_query($conn,"SELECT * from signup where username='$username'");
$num_rows=mysqli_num_rows($result1);
if($num_rows>=1)
{
die(' User already exists');


}

$md5password=md5($password);
 
$SQL = "INSERT INTO signup(firstname,lastname,username,email,password,mobilenumber) VALUES ('$firstname', '$lastname','$username','$email',
'$md5password','$mobilenumber')"; 

$result = mysqli_query($conn,$SQL); 

header("Location:success.php");
//echo"<br>firstname:".$firstname;
}
}
}
?>


<html>
<head>
		<link href="style.css" rel="stylesheet" type="text/css" />
		<!--<script type= "text/javascript" src="validation.js"> </script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<script  type="text/javascript">
 
$(document).ready(function() {
	

	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
			fname: "required",
			lname: "required",
			uname: "required",
			pwd: "required",
			cpwd: "required",
			
			email: {
				required: true,
				email: true
			},
			mobile: {
				required: true,
				number: true,
				 minlength: 10
			},
		},
		messages: {
			name: "Please enter your firstname",        
			email: "Please enter a valid email address",
			mobile: "Please enter a valid mobile no",
		},
			

	});
});
</script>

	<title>REGISTER FORM</title>
</head>
<body>
	<h1 id="h1">REGISTER FORM</h1>
	
	<div id="img1">
		 <img src="admin.jpg"  alt="login form" style="width:100px;height:72px;border:0" >
	</div>
	

		<div id="img2">
  <img src="download.jpg"  alt="login form" style="width:72px;height:72px;border:0">
  </div>
</a>
<p id="paragraph">to login as a admin? <a href="login.html" target="_blank">Click here!</a></p>

	
	<div id="form">
		<form name="myForm" id="signupForm"  method="POST"  onsubmit="return validateForm();">
			FirstName:<br>
			<input class="a" type="text" name="fname"   value="<?php if(isset($_POST["fname"])) echo $_POST["fname"];?>"/> <span id="firstname">
			<?php if(isset($errors["fname1"])) echo $errors["fname1"];?></span><br>	
			LastName:<br>
			<input class="a" type="text" name="lname" value="<?php if(isset($_POST["lname"])) echo $_POST["lname"];?>"/>
			<span id="lastname"><?php if(isset($errors["lname1"])) echo $errors["lname1"];?></span><br>
				
			Username:<br>
			<input class="a" type="text" name="uname" value="<?php if(isset($_POST["uname"])) echo $_POST["uname"];?>"/>
			<span id="username"><?php if(isset($errors["uname1"])) echo $errors["uname1"];?></span><br>

			Email:<br>
			<input class="a" type="text" name="email"  value="<?php if(isset($_POST["email"])) echo $_POST["email"];?>"/>
			<span id="email"><?php if(isset($errors["email1"])) echo $errors["email1"];?></span><br>

			Password:<br>
			<input class="a" type="password" name="pwd" value="<?php if(isset($_POST["pwd"])) echo $_POST["pwd"];?>"/>
			<span id="password"><?php if(isset($errors["pwd1"])) echo $errors["pwd1"];?></span><br>

			Confirm Password:<br>
			<input class="a" type="password" name="cpwd" value="<?php if(isset($_POST["cpwd"])) echo $_POST["cpwd"];?>"/>
			<span id="passwords"><?php if(isset($errors["cpwd1"])) echo $errors["cpwd1"];?></span><br>
				
			Mobile Number:<br>
			<input class="a" type="number" name="mobile" value="<?php if(isset($_POST["mobile"])) echo $_POST["mobile"];?>"/>
			<span id="mobile"><?php if(isset($errors["mbl"])) echo $errors["mbl"];?></span><br>

			<input class="b1" type="reset" />

			<input class="b" type="submit" value="SIGNUP" name="submit">
		
	</form>


</div>
</body>
</html>
