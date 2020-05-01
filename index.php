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
			
			<img src="img/coverimg.jpg" class="backdrop-img"> <!-- backdrop image ends -->
			
			<div class="login">
				<h3 class="login:h3">login</h3><br><br><br>
				<form action="include/login.inc.php" method="post">
					<input type="text" name="mail" class="inputform" placeholder="email ID"/><br>
					<input type="password" name="pwd" class="inputform" placeholder="password"/><br>
					<button type="submit" class="login-button" name="login-submit">SUBMIT</button><br>
				</form>
				
					<a href="register.php" class="register-btn">New User</a>
				
			</div> <!-- login form ends -->
	
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
		<!-- Top section of the page ends -->
		<!-- ** -->
		<!-- *** -->
		<!-- Mid section of the page -->
		<div class="featured">
			<div class="featureright">
				<h2>Most design friendly:IEEE 27th international conference</h2>
				<img src="img/featurerightimg.jpg" class="featurerightimg">
				<p>I've been following this site since it started and has seen its progression from just one guy writing about stuff he loves, to a site that get's decent traffic and has a team of writers.</p>
				<p>Knowtechie is a great example of a site that started out as a hobby but has fast become a business. I like the angle they have as well. "Tech News For The Non Techie". KnowTechie is a blog for people who love tech, but live outside the bubble. This is so refreshing, because so many tech blogs out there are a bit too technical and full to the brim of jargon. It's nice to see a tech blog that has lowered the entry level to tech news.</p>
			</div>
			<div class="featureleft">
				<h2>Is SAP becoming obsolete?</h2>
				<img src="img/featureleftimg.jpg" class="featureleftimg">
				<p>Another well thought out and well designed mommy blog. This blog is quite varied in its content as its got a little bit of everything. If you love all things parenting, cooking with kids, craft with the children, health, family travel, stories, charity etc. then this site will give you plenty of inspiration on how you could start your own mommy blog.</p>
				<p>Motherhood Diaries is an online parenting platform where parents and parents-to-be can share their opinions, expertise and solutions on all topics related to pregnancy and parenting. Leyla, who owns and maintains MHD, builds her traffic through targeting specific keywords related to parenting and creating resources around those phrases. She's also concentrating her efforts on social channels like Pinterest and Facebook to create lucrative audiences via an alternative traffic source to Google.</p>
			</div>
		</div>
		<div class="footer">
			<div class="otherfooter">
				<div class="footerdiv">
						<h3>would you like to be updated with our newsletter</h3>
						<button class="subscribe">subscribe</button>
				</div>
				<div class="footerdiv">
					<ul id="ul-client">
						<li class="li-client"><a href="https://www.ibm.com/in/en?1nk=m" target="_blank"  ><img src="img/IBM.png" class="client-img"></a></li>
						<li class="li-client"><a href="https://www2.deloitte.com/us/en.html" target="_blank" ><img src="img/Deloitte.png" class="client-img"></a></li>
						<li class="li-client"><a href="https://www.tesla.com/redirect=no" target="_blank" ><img src="img/Tesla.png" class="client-img"></a></li>
						<li class="li-client"><a href="https://www.apple.com/in/" target="_blank" ><img src="img/apple.png" class="client-img"></a></li>
					</ul>
				</div>
				<div class="footerdiv">
					<div class="socialfooter">
						<a href="" target="_blank"  ><img src="img/fb.png" class="socialicon"></a>
						<a href="" target="_blank"  ><img src="img/insta.png" class="socialicon"></a>
						<a href="" target="_blank"  ><img src="img/twit.png" class="socialicon"></a>
					</div>
				</div>
			</div>
			<div class="copyrightbar"></div>
		</div>
		
		
   </body>
</html>