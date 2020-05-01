<?php
?>

<!DOCTYPE html>


<html>
	<head>
		<title>First CSS HTML project</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link href="projectOne.css" rel="stylesheet" type="text/css">
	</head>
   
	<body>
		<!-- Top section of the page -->
		<div id="backdrop">
			
			<img src="img/registration.jpg" class="backdrop-img"> <!-- backdrop image ends -->
			<form action="include/signup.inc.php" method="post">
				<div class="">
					<input type="text" name="uname" class="inputform" placeholder="Username"/><br>
					<input type="text" name="mail"  class="inputform" placeholder="Login ID"/><br>
					<input type="password" name="pwd"  class="inputform" placeholder="password"/><br>
					<input type="password" name="pwd-repeat"  class="inputform" placeholder="repeat password"/><br>
					<button class="register-btn" type="submit" name="signup-submit">OK</button><br>
				</div>
			</form>
	
			<a href="#"><img src="img/projectOnelogo.png" class="logo-img"></a> <!-- Home icon area ends -->
			
			<div class="navbar">
				<ul class="ul-horizon">
					<li><a href="#explore">EXPLORE</a></li>
					<li><a href="#solutions">SOLUTIONS</a></li>
					<li><a href="#platforms">PLATFORMS</a></li>
					<li><a href="#Media">MEDIA</a></li>
				</ul> 
			</div> <!-- nav ends -->
			
		</div>
		
		
		
   </body>
</html>