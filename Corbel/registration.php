<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $Number = mysqli_real_escape_string($conn, $_POST['Number']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['pass']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{
         $insert = "INSERT INTO user_form(name, Number, email, password, user_type) VALUES('$name','$Number','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:Login.php');
    }
};

?>
<html>
	<head>
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<title>Corbel Design</title>
	<link rel="stylesheet" href="login.css">
	<link rel"stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://kit.fontawesome.com/f99f4056b9.js"></script>
	</head>
	<body>
		<section class="header">
			<nav>
				<a href = "index.html"><img src = "logo.png" alt="Corbel Designs" class="logo"></a>
				<div class= "nav-links" id="navLinks">
				<i class="fas fa-times" onclick="hideMenu()"></i>
					<ul>
						<li><a href = "index.html">HOME</a></li>
						<li><a href = "AboutUs.html">ABOUT US</a></li>
						<li><a href = "service.html">SERVICES</a></li>
						<li><a href = "project.html">PROJECTS</a></li>
						<li><a href = "contact.html">CONTACT US</a></li>
						<li><a href = "Login.php">LOGIN</a></li>
						<!--<li><a href = "Login.html">SIGN-OUT</a></li>-->
					</ul>
				</div>
				<i class="fa-solid fa-bars" onclick="showMenu()"></i>
			</nav>
		</section>
		<section class="body">
		<div class = "container">
		<div class="cover"></div>
			<form action = "#" name="frm1" method="POST" action="login.php">
			<div class = "Signup-form">
					<div class = "title">Sign-up</div>
					<?php
					  if(isset($error)){
						 foreach($error as $error){
							echo '<span class="error-msg">'.$error.'</span>';
						 };
					  };
					  ?>
					<div class = "input-boxes">
						<div class = "input-box">
						<i class = "fa-solid fa-user"></i>
						<input type="text" name="name" placeholder="Enter your Name" required>
						</div>
						<div class = "input-box">
						<i class="fa-solid fa-phone"></i>
						<input type="tel" name="Number" placeholder="Enter your phone number" required>
						</div>
						<div class = "input-box">
						<i class="fa-solid fa-envelope"></i>
						<input type="email" name="email" placeholder="Enter your mail" required>
						</div>
						<div class = "input-box">
						<i class="fa-solid fa-lock"></i>
						<input type="password" name="pass" placeholder="Enter your password" required>
						</div>
						<div>
							<select name="user_type">
								<option value="user">user</option>
								<option value="admin">admin</option>
							</select>
						</div>
						<div class = "button input-box">
						<input type="submit" name="submit" value="Submit">
						</div>
						
						<div class="textsign-up-text">Already have an account?  <a href="Login.php">Login now</a></div>
					</div>
				</div>
			</form>
		</div>
		</section>
		<script>
		var navLinks = document.getElementById("navLinks");
		function showMenu(){
			navLinks.style.right = "0";
		}
		function hideMenu(){
			navLinks.style.right = "-200px";
		}
		</script>
	</body>
</html>