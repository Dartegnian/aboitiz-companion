<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Property Companion</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="assets/images/logosmallsquare.png">
		<!-- CSS -->
		<link href="assets/css/portfolio.css" rel="stylesheet"> <!-- Dark theme -->
		<link rel="stylesheet" type="text/css" href="assets/css/textrotator.css"/>
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!-- Scripts -->
		<script src='assets/js/jquery.min.js'></script>
		<script src='assets/js/textrotator.js'></script>
		<script>
			$(document).ready(function(){
				$(".header .rotate").textrotator({
					animation: "dissolve",
					speed: 2000
				});

				
				$("button#fltlft").click(function(){
					alert ("Services requested!\nThey should be responding to your response in a moment.");
				});

				$("button#fltrght").click(function(){
					alert ("Services relieved.\nWe shall contact them shortly to inform them of your decision.");
				});
			});
			$(function() {
				$("#backtotop").click(function() {
					$("body,html").animate({
						scrollTop: 0
					}, 4500);
					return false
				})
			});
			function popup() {
    			alert("Invalid or empty credentials.");
			}
			function Logout() {
				window.location="index.php";
			}
			function DemoAlert() {
				alert("No login credentials entered.\nYou are currently using a demo view.");
			}
		</script>
		<?php
			if(empty($_POST['username'])) {
				echo '<script type="text/javascript">', 'DemoAlert();', '</script>';
			}
		?>
	</head>
	<body>
		<header>
			<h1 style="display: inline;"> <a href="index.php"><img id="logo" src="assets\images\logowhite.png"/></a></h1>
			<button style="display: inline-block;float: right; margin-left: -5px; margin-top: 4px; margin-right: 30px;" class="userbutt" onclick="Logout()">Logout</button>
			<form action="portfolio.php" method="post" style="display: inline;">
				<table border="0" style="display: inline; float: right;">
					<tr style="display: inline;">
					<td align="left"><input class="inputfield" type="text" readonly="yes" name="username" value="<?php
					if(!empty($_POST['username'])) {
						$username = $_POST['username'];
						echo $username;
					} else {
						echo "Demo Admin";
					}
					?>"
				size="20" maxlength="50" style="background: url(assets/images/mdl2/person.png); background-color: rgba(100, 100, 100, 0.3); background-size: 30px; padding-left: 35px; background-repeat: no-repeat;"></td>
					</tr>
					<tr style="display: inline;">
					<td colspan="2" align="center">
					</td>
					</tr>
				</table>
			</form>
			<nav id="headnav">
				<a id="current" style="border-right: 1px solid #e4e4e4;">Portfolio</a>
				<a id="current" style="padding-left: 25px;">Companions</a>
				<a href="properties.php">Properties</a>
			</nav>
		</header>
		<section id="filler">
		</section>
		<section id="content">
			<h1>Companions</h1>
			<nav id="empnav">
				<a id="active">All</a>
				<a class="others">Luzon</a>
				<a class="others">Visayas</a>
				<a class="others">Mindanao</a>
			</nav>
			<div id="entrycontainer">
				<div id="entryfiller" style="float: left; background-image: url(assets/images/companions/pat.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/companions/pat.jpg);"></h6>
						<h5>Patricia Calugas</h5>
						<p>Makati Companion</p>
						<h4 class="loggedin">AVAILABLE</h4>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							Property Companion HQ
						</div>
						<div class="moreinfo" id="info2">
							pcalugas@p-companion.co
						</div>
						<div class="moreinfo" id="info3">
							69 properties sold
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Request
							</button>
							<button class="moreinfo" id="fltrght">
								Relieve
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: right; background-image: url(assets/images/companions/mina.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/companions/mina.jpg);"></h6>
						<h5>Carmina Ambrocio</h5>
						<p>Bataan Companion</p>
						<h4 class="loggedout">UNAVAILABLE</h4>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							On leave
						</div>
						<div class="moreinfo" id="info2">
							minaambrocio@p-companion.co
						</div>
						<div class="moreinfo" id="info3">
							420 properties sold
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Request
							</button>
							<button class="moreinfo" id="fltrght">
								Relieve
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/companions/jason.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/companions/jason.jpg);"></h6>
						<h5>Jade Adriano</h5>
						<p>Bonifacio Global City Companion</p>
						<h4 class="loggedin">AVAILABLE</h4>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							Property Companion HQ
						</div>
						<div class="moreinfo" id="info2">
							jeadriano@p-companion.co
						</div>
						<div class="moreinfo" id="info3">
							50 properties sold
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Request
							</button>
							<button class="moreinfo" id="fltrght">
								Relieve
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/companions/pineda.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/companions/pineda.jpg);"></h6>
						<h5>Justin Pineda</h5>
						<p>Bohol Companion</p>
						<h4 class="loggedin">AVAILABLE</h4>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							Property Companion HQ
						</div>
						<div class="moreinfo" id="info2">
							jpineda@p-companion.co
						</div>
						<div class="moreinfo" id="info3">
							37 properties sold
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Request
							</button>
							<button class="moreinfo" id="fltrght">
								Relieve
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: right; background-image: url(assets/images/companions/reisha.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/companions/reisha.jpg);"></h6>
						<h5>Reisha Ferrer</h5>
						<p>Cebu Companion</p>
						<h4 class="loggedout">UNAVAILABLE</h4>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							On leave
						</div>
						<div class="moreinfo" id="info2">
							rferrer@p-companion.co
						</div>
						<div class="moreinfo" id="info3">
							92 properties sold
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Request
							</button>
							<button class="moreinfo" id="fltrght">
								Relieve
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/companions/ashley.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/companions/ashley.jpg);"></h6>
						<h5>Ashley Hwang</h5>
						<p>Leyte Companion</p>
						<h4 class="loggedin">AVAILABLE</h4>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							Property Companion HQ
						</div>
						<div class="moreinfo" id="info2">
							ahwang@p-companion.co
						</div>
						<div class="moreinfo" id="info3">
							25 properties sold
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Request
							</button>
							<button class="moreinfo" id="fltrght">
								Relieve
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/companions/Melad.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/companions/Melad.jpg);"></h6>
						<h5>Kawasaki Melad</h5>
						<p>Iligan Companion</p>
						<h4 class="loggedin">AVAILABLE</h4>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							Property Companion HQ
						</div>
						<div class="moreinfo" id="info2">
							kmelad@p-companion.co
						</div>
						<div class="moreinfo" id="info3">
							42 properties sold
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Request
							</button>
							<button class="moreinfo" id="fltrght">
								Relieve
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: right; background-image: url(assets/images/companions/Jessica.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/companions/Jessica.jpg);"></h6>
						<h5>Jessica Jung</h5>
						<p>Davao Companion</p>
						<h4 class="loggedin">AVAILABLE</h4>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							Property Companion HQ
						</div>
						<div class="moreinfo" id="info2">
							j_snsd@p-companion.co
						</div>
						<div class="moreinfo" id="info3">
							19 properties sold
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Request
							</button>
							<button class="moreinfo" id="fltrght">
								Relieve
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/companions/tommy.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/companions/tommy.jpg);"></h6>
						<h5>Antonio Lu</h5>
						<p>Misamis Oriental Companion</p>
						<h4 class="loggedout">UNAVAILABLE</h4>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							On leave
						</div>
						<div class="moreinfo" id="info2">
							alu@p-companion.co
						</div>
						<div class="moreinfo" id="info3">
							57 properties sold
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Request
							</button>
							<button class="moreinfo" id="fltrght">
								Relieve
							</button>
						</div>
					</div>
				</div>

		</div>
		</section>
		<footer>
			<div id="backtotop">
				<i id="chevron"></i>
			</div>
			<div id="footstuff">
				<a href="https://aboitiz.com" target="_blank">
					<img src="assets\images\logosmallsquare.png">
				</a>
				<div class="footcontain">
					<h4>About Companion</h4>
					<p>Learn more about the automated companion portal that aims to make the management of your properties easier.</p>
					<ul>
					<li><a href="about.html">About us</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="privacy.html">Privacy Policy</a></li>
					<li><a href="feedback.html">Send your feedback</a></li>
					</ul>
				</div>
				<div class="footcontain">
					<h4>Companion Links</h4>
					<ul>
					<li><a href="https://www.dartegnian.com">Current Partners</a></li>
					<li><a href="https://www.dartegnian.com">Partner With Us</a></li>
					<li><a href="https://www.dartegnian.com">Service Status</a></li>
					<li><a href="https://www.dartegnian.com">Licensing</a></li>
					<li><a href="https://www.dartegnian.com">Tutorials</a></li>
					<li><a href="https://www.dartegnian.com">Get Help</a></li>
					<li><a href="https://www.dartegnian.com">Termination</a></li>
					</ul>
				</div>
				<div class="footcontain">
					<h4>About Aboitiz</h4>
					<ul>
					<li><a href="https://aboitiz.com/home">Website</a></li>
					<li><a href="https://aboitiz.com/about-us/aboitiz-and-company">About us</a></li>
					<li><a href="https://aboitiz.com/investor-relations/share-information">Investor Relations</a></li>
					<li><a href="https://aboitiz.com/media-center/press-releases">Press Releases</a></li>
					<li><a href="http://careers.aboitiz.com/">Careers</a></li>
					<li><a href="https://aboitiz.com/contact-us/whistleblowing_sys">Whistleblowing Hotline</a></li>
					</ul>
				</div>
				<div class="footcontain">
					<h4>Other Aboitiz Links</h4>
					<ul>
					<li><a href="https://aboitiz.com/about-us/the-aboitiz-way">The Aboitiz Way</a></li>
					<li><a href="https://aboitiz.com/about-us/management-directory">Our Leaders</a></li>
					<li><a href="https://aboitiz.com/corporate-governance/corporate-journey">Corporate Journey</a></li>
					<li><a href="https://aboitiz.com/about-us/business-at-a-glance">Our Businesses</a></li>
					</ul>
				</div>
				</div>
		</footer>
		<footer id="apcfooter">
			<center>
				Coded with <a href="assets\images\APC-Hymn.jpg">❤</a> by the students of <a href="https://apc.edu.ph/" target="_blank">Asia Pacific College</a>
			</center>
		</footer>
	</body>
</html>