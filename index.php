<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Property Companion</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="assets/images/logosmallsquare.png">
		<!-- CSS -->
		<link href="assets/css/styles-main.css" rel="stylesheet"> <!-- Dark theme -->
		<!-- <link href="assets/css/styles-light.css" rel="stylesheet"> Light theme -->
		<link rel="stylesheet" type="text/css" href="assets/css/textrotator.css"/>
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!-- Scripts -->
		<script src='assets/js/jquery.min.js'></script>
		<script src='assets/js/textrotator.js'></script>
		<script src='assets/js/fluidvids.js'></script>
		<script>
			$(document).ready(function(){
				$(".header .rotate").textrotator({
					animation: "dissolve",
					speed: 2000
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
    			alert("Invalid or empty credentials.\nPlease type in your credentials and click the \"Log In\" button");
			}
			function redirect() {
				window.location="porfolio.php";
			}
		</script>
	</head>
	<body>
		<header>
			<h1 style="display: inline;"> <img id="logo" src="assets\images\logomain.png"/></h1>
			<button style="display: inline-block;float: right; margin-left: -5px; margin-top: 4px; margin-right: 30px;" class="userbutt" onclick="redirect()">Register</button>
			<form action="porfolio.php" method="post" style="display: inline;">
				<table border="0" style="display: inline; float: right;">
					<tr style="display: inline;">
					<td style="color: #000">Username</td>
					<td align="left"><input class="inputfield" type="text" name="username" size="20" maxlength="50" style="background: url(assets/images/mdl2/people.png); background-color: rgba(100, 100, 100, 0.3); background-size: 30px; padding-left: 35px; background-repeat: no-repeat;"></td>
					</tr>
					<tr style="display: inline;">
					<td style="color: #000">Password</td>
					<td align="left"><input class="inputfield" type="password" name="password" style="background: url(assets/images/mdl2/lock.png); background-color: rgba(100, 100, 100, 0.3); background-size: 30px; padding-left: 35px; background-repeat: no-repeat;" size="20" maxlength="50" /></td>
					</tr>
					<tr style="display: inline;">
					<td style="border-right: 1px solid #e4e4e4; padding-right: 10px;" colspan="2" align="center"><input type="submit" value="Log In" class="button"/></td>
					</tr>
					<tr style="display: inline;">
					<td colspan="2" align="center">
					</td>
					</tr>
				</table>
			</form>
			<nav id="headnav">
				<a id="current">Home</a>
				<a onclick="redirect()">Your Portfolio</a>
				<a href="products.php">Property Nearby</a>
				<a href="pricing.php">Pricing</a>
				<a onclick="popup()">Blog</a>
				<a href="about.php">About</a>
			</nav>
		</header>
		<section id="filler">
		</section>
		<section id="hero">
			<h1 class="header"><span class="rotate">AN EASIER WAY TO MANAGE YOUR PROPERTY, A FASTER WAY, A BETTER WAY, A COMPANION</span></h1>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<img src="assets\images\wewlad1.jpeg"\>
				</div>
			</div>
			<aside id="infospace">
				<h2>What Is The Property Companion?</h2>
				<p class="firsttwo">Companion is a suite of tools that can help you manage your property investments and improve your interaction by introducing several technologies that can make your investment life easier. Designed by a team from the Philippines, and hailing from Asia Pacific College, Companion is the best and the most sure-fire way to get the most out of your land-based investment.</p>
				<br/>
				<h2>Mission</h2>
				<p class="firsttwo">Companion aims to be the go-to application that your employees use when getting managing properties. This aims to be the best suite of tools for everyone thinking of managing their properties.</p>
				<br/>
				<h2>About the Team</h2>
				<p>Ever since early 2017, the team that has developed Companion has been competing in hackathons. They have developed several software solutions for widescale use, such as a modern incentivized garbage disposal system, a location-based project viewing system, and recently a space information portal. They are currently in their internships and are about to graduate soon.</p>
			</aside>
		</section>
		<section class="fullbackground">
			<div id="leftcontain">
				<h1>To Your Dream Property</h1>
				<p>Want to try and see what Companion can do for you? Want to see the features it has and see if it's right for your investment toolset? We've got you covered, we offer "test drives" to potential users who are interested in the service.</p>
				<br>
				<p>If you want to find out if the Companion suite is really right for you, you can contact us below and ask for a trial today. We can guarantee your money back if you don't get the services advertised.</p>
				<br>
				<p>Don't worry, we've got experts from all over the world who are more-than-skilled enough to know how to integrate our services into your business. It make take up to 15 business days for a full implementation, but rest assured, you will be getting the full suite.</p>
				<br>
				<p>So, what are you waiting for? Contact us today and test drive a shiny new Companion suite!</p>
				<br><br>
				<button class="contactbutt" id="drivebutt" onclick="Redirect2()">Test Drive</button>
			</div>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<a href="products.php" target='_blank'>
						<img src="assets\images\devices.png"\>
					</a>
				</div>
			</div>
			<aside id="infospace">
				<h2>Available Wherever You Go</h2>
				<p class="firsttwo">We've developed the Companion service to run smoothly and elegantly on across all modern devices. From screens as large as a TV set to the screen on your phone, you can guarantee that you'll never lose sight of your work, schedule, or how we'll you've done throughout the weeks.</p>
				<br/>
				<h2>Cross-Platform</h2>
				<p class="firsttwo">Companion is available on <strong>ALL</strong> major application stores. It is available as a standalone application on iOS, Android, and Windows 10 devices. It also comes as a browser extension on the Chrome Web Store, on the Mozilla Marketplace for Firefox, and on the Opera Mobile Store.</p>
				<br/>
				<div class="platform-icons cf">
					<a id="apple" href="https://itunes.apple.com/ph/app/microsoft-excel/id586683407?mt=8" target="_blank">
						<i class="fa fa-apple" aria-hidden="true"></i>
					</a>
					<a id="android" href="https://play.google.com/store/apps/details?id=com.microsoft.office.excel&hl=en" target="_blank">
						<i class="fa fa-android" aria-hidden="true"></i>
					</a>
					<a id="windows" href="https://www.microsoft.com/en-ph/store/p/excel-mobile/9wzdncrfjbh3" target="_blank">
						<i class="fa fa-windows" aria-hidden="true"></i>
					</a>
					<a id="chrome" href="https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm?hl=en" target="_blank">
						<i class="fa fa-chrome" aria-hidden="true"></i>
					</a>
					<a id="firefox" href="https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/" target="_blank">
						<i class="fa fa-firefox" aria-hidden="true"></i></i>
					</a>
					<a id="opera" href="https://addons.opera.com/en/extensions/details/ublock/?display=en" target="_blank">
						<i class="fa fa-opera" aria-hidden="true"></i>
					</a>
					<a id="edge" href="https://www.microsoft.com/en-us/store/p/ublock-origin/9nblggh444l4?wa=wsignin1.0" target="_blank">
						<i class="fa fa-edge" aria-hidden="true"></i>
					</a>
            	</div>
			</aside>
		</section>
		<section class="fullbackground" id="vertmenu">
			<div class="verticalmenu" id="juan">
				<div class="vertcontain">
					<ul>
						<li>
							<img class="partnerimg" src="assets\images\partners\partner1.jpg">
						</li>
						<li>
							<img class="partnerimg" src="assets\images\partners\partner2.jpg">
						</li>
						<li>
							<img class="partnerimg" src="assets\images\partners\partner3.jpg">
						</li>
					</ul>
				</div>
			</div>
			<div id="rightcontain">
				<h1>Key Industry Partners</h1>
				<p>As of now, the Companion login suite currently has 3 real estate partners to help investors get the most out of their properties in an interactive way.</p>
				<br>
				<p>Grab and Uber Philippines have partnered with us recently to introduce an emergency transport system designed to help those who are late for work get to their destination on time.</p>
				<br>
				<p>Several international fast food companies (McDonalds, KFC, and Jollibee) have partnered with us to help those who are late, or are in a rush, get their day's meal. Still hot, and ready to eat. All upon your arrival to work.</p>
				<br><br>
				<button class="contactbutt" id="partnerbutt" onclick="Redirect2()">PARTNER UP</button>
			</div>
		</section>
		<div class="header2" id="vidcontainer" style="padding: 0 !important; background: #0099ff !important;">
			<h1>Virtual Reality Completed Property Demo</h1>
			<div id="videoWrapper">
				<div id="videoContainer"></div>
			</div>
			<script>
				var tag = document.createElement('script');
				tag.src = "https://www.youtube.com/iframe_api";
				var firstScriptTag = document.getElementsByTagName('script')[0];
				firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
				var videoContainer;
				function onYouTubeIframeAPIReady() {
					videoContainer = new YT.Player('videoContainer', {
						width: '1920',
						height: '1080',
						videoId: 'bxdKp9Cr-l0',
						playerVars: {'controls': 0,'rel': 0,'showinfo': 0, 'vq': 'hd1080', 'modestbranding': 1},
						events: {  
							'onReady': onPlayerReady  
						} 
					});
				}
				function onPlayerReady(event) {  
					event.target.setPlaybackQuality("hd1080");
				}
			</script>
		</div>
		<section id="content">
			<h1>Primary Locations Supported by Companion</h1>
			<table width="95%" cellspacing="5" border="0" style="margin: 0 auto;">
				  <tbody>
				    <tr>
				      <th scope="col">Luzon</th>
				      <th scope="col">Visayas</th>
				      <th scope="col">Mindanao</th>
				      <th scope="col">Overseas</th>
				    </tr>
				    <tr>
				    <tr>
				      <td>Cagayan</td>
				      <td>Leyte</td>
				      <td>Iligan City</td>
				      <td>California, USA</td>
				    </tr>
				    <tr>
				      <td>Bataan</td>
				      <td>Cebu</td>
				      <td>Lanao del Norte</td>
				      <td>Florida, USA</td>
				    </tr>
				    <tr>
				      <td>Makati</td>
				      <td>Tacloban</td>
				      <td>Davao del Sur</td>
				      <td>Sweden</td>
					</tr>
					<tr>
				      <td>Bonifacio Global City</td>
				      <td>Bohol</td>
				      <td>Misamis Oriental</td>
				      <td>Norway</td>
					</tr>
					<tr>
				      <td>Baguio</td>
				      <td>Mandaue, Cebu</td>
				      <td>Davao del Norte</td>
				      <td>Halifax, Nova Scotia, Canada</td>
					</tr>
				  </tbody>
				</table>
		</section>
		<section class="fullbackground" id="final">
			<h1>Get a FREE trial today!</h1>
			<div id="formcontainer">
				<form action="signingin.php" method="post" style="display: inline;">
					<table border="0" style="display: inline; margin: 0 auto">
						<tr style="display: inline;">
						<td align="left"><input class="inputfield" type="text" name="username" size="20" placeholder="Full legal name" style="background-image: url(assets/images/mdl2/city.png);" maxlength="50"></td>
						</tr>
						<tr style="display: inline;">
						<td align="left"><input class="inputfield" type="text" name="password" style="background-image: url(assets/images/mdl2/mailblack.png);" placeholder="Business email" size="20" maxlength="50" /></td>
						</tr>
						<tr style="display: inline;">
						<td colspan="2" align="center"><input type="submit" value="Get A Companion" class="button"/></td>
						</tr>
						</tr>
					</table>
				</form>
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