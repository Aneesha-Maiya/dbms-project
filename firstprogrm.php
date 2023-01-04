<?php 
	session_start();
?>
<?php
	include("connection.php");
?>

<html>
<head> 
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width = device-width, initial-scale=1">
	<link rel = "stylesheet" type = "text/css" href = "login-style.css">
	<link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title> Login Page</title> 
</head>
<body>
		<form action = "#" method = "POST" autocomplete = "off"> 
		<div class = "Center"> 
			<img src = "images/user1.png" alt = "user image" class = "usr_img" >
			<h1> Login </h1>
			<div class = "form">
			    <p style = "" class = "fieldname" > Email: </p>
				<i class="fa fa-user "></i>
			    <input type = "text" name = "email"  class = "text_field" placeholder = "Enter your email id">
				<p style = "" class = "fieldname" > Password: </p>
				<i class="fa fa-lock "></i>
				<input type = "password" name = "passwd"  class = "text_field" placeholder = "Enter your password">
				<div class = "forget_pass"> 
					<a href = "#" class = "forgot_pass_link"> Forgot Password?</a>
				<div>	
				<input type = "submit" name = "login" class = "Login_button" value = "Login">
				<div class = "sign_up"> New Member?
					<a href = "#" class = "forgot_pass_link"> Sign up here </a>
				</div>
			</div>
		</div>
		</form>
</body>
</html>

<?php
	if (isset($_POST['login']))
	{
		$username = $_POST['email'];
		$pwd = $_POST['passwd'];
		$query = "SELECT * FROM user WHERE email = '$username' && password = '$pwd' ";
		$data = mysqli_query($conn, $query);
		$total = mysqli_num_rows($data);

		if($total == 1){
			$_SESSION['user_name'] = $username ;
			header('location:display.php');
		}
		else{
			header('location:access-denied.php');
		}
	}
?>