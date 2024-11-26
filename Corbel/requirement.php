<?php

@include 'config.php';

if(isset($_POST['submit']))
{
 
   $mail = $_POST['mail'];
   $A_name = $_POST['A_name'];
   $size = $_POST['size'];
   $Description = $_POST['Description'];
   $budget = $_POST['budget'];
   
   $sql = "INSERT INTO requirement1(mail,A_Name, A_Size, Description,budget) 
			values('$mail','$A_name','$size','$Description','$budget')";
			if (mysqli_query($conn ,$sql)){
					echo "<script>alert('Your response has been recorded');</script>";
			}else{
				echo "Error :" .$sql. "<br>" .mysqli_error($conn);
			};
			header('location:A_req.html');
	mysqli_close($conn);
};

?>
<html>
	<head>
	<meta name = "viewport" content = "with=device-width, initial-scale=1.0">
	<title>Corbel Design</title>
	<link rel="stylesheet" href="req.css">
	<link rel"stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://kit.fontawesome.com/f99f4056b9.js"></script>
	
	<script>
		function myFunction() {
			location.replace("view.php");
		}
	</script>
	
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
			<div class="form_content">
			<div class = "login-form">
				<div class = "title">Your Requirement </div>
					<div class = "input-boxes">
						<div class = "input-box">
						<i class="fa-solid fa-envelope"></i>
						<input type="email" name="mail" placeholder="Your mail" required>
						</div>
						<div class = "input-box">
						<i class="fa-solid fa-chart-area"></i>
						<input type="text" name="A_name" placeholder="Area Name" required>
						</div>
						<div class = "input-box">
						<input type="text" name="size" placeholder="Area Size" required>
						</div>
						<div class = "input-box">
						<i class="fa-solid fa-pen-to-square"></i>
						<textarea rows="5" cols="50" name="Description" placeholder="Description" required></textarea>
						</div>
						<div class = "input-box">
						<i class="fa-solid fa-indian-rupee-sign"></i>
						<input type="tel" name="budget" placeholder="what is your budget" required>
						</div>
						<div class = "button input-box">
						<input type="submit" name="submit" value="Submit">
						</div>
						<div class = "button input-box">
						<input type="submit"  name="submit1" value="View your Quotation" onclick="myFunction()">
						</div>
					</div>
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