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
		<style>
			section#filler {
				background-image: url(assets/images/properties/davao.jpg);
			}
			#miscstuff div#entryfiller {
				margin-left: 80px;
			}
			#miscstuff aside#infospace {
				width: 55%;
				border-right: 0px solid #e5e5e5;
			}
		</style>
		<!-- Scripts -->
		<script src='assets/js/jquery.min.js'></script>
		<script src='assets/js/textrotator.js'></script>
		<script src='assets/js/loader.js'></script>
		<script src='assets/js/chartcore.js'></script>
		<script>
			$(document).ready(function(){
				$(".header .rotate").textrotator({
					animation: "dissolve",
					speed: 2000
				});

				
				$("button#fltlft").click(function(){
					alert ("Services requested!\nThey should be answering to your response in a moment.");
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
		<script type="text/javascript">
		google.charts.load("current", {packages:["corechart"]});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {
			var data = google.visualization.arrayToDataTable([
			['Task', 'Hours per Day'],
			['Materials & Supply',     1],
			['Manpower',      1],
			['Land Management',  1],
			['Furniture', 1],
			['Misc. property improvements',    1]
			]);

			var options = {
			title: 'Extend Your Focus On Your Property',
			pieHole: 0.5,
			};
			var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
			chart.draw(data, options);
			
			function selectHandler() {
			var selectedItem = chart.getSelection()[0];
				if (selectedItem) {
					var toppings = data.getValue(selectedItem.row, 1);
					toppings++;
					
			}
			data.setValue(selectedItem.row, 1, toppings);
			chart.draw(data, options);
			}
			google.visualization.events.addListener(chart, 'select', selectHandler);    
			chart.draw(data, options);
		}
		</script>
		<script type="text/javascript">

		// Load the Visualization API and the corechart package.
		google.charts.load('current', {'packages':['corechart']});

		// Set a callback to run when the Google Visualization API is loaded.
		google.charts.setOnLoadCallback(drawChart);

		// Callback that creates and populates a data table,
		// instantiates the pie chart, passes in the data and
		// draws it.
		function drawChart() {

			// Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Names');
			data.addColumn('number', 'Amountt');
			data.addRows([
			['Materials & Supply', 240000],
			['Manpower', 670000],
			['Land Management', 4750000],
			['Furniture', 210000],
			['Miscellaneous', 90000]
			]);

			// Set chart options
			var options = {'title':'Davao Property Breakdown in Phillipine Peso (PHP)',
						'width':900,
						'height':500};

			// Instantiate and draw our chart, passing in some options.
			var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
			chart.draw(data, options);
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
				<a href="portfolio.php" style="padding-left: 25px;">Companions</a>
				<a href="properties.php" id="current">Properties</a>
			</nav>
		</header>
		<section id="filler">
		</section>
		<section id="content">
			<h1>Davao Property</h1>
			<nav id="empnav">
				<a id="active">Luzon</a>
				<a class="others">Visayas</a>
				<a class="others">Mindanao</a>
			</nav>
			<div id="entrycontainer">
				<div class="mainbody">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<a href="assets\images\properties\davao.jpg" target='_blank'>
						<img src="assets\images\properties\davao.jpg"\>
					</a>
				</div>
			</div>
			<aside id="infospace">
				<p>Davao is currently one of the safest places in the Philippines. With a secure hold on the land, this makes Davao one of the Philippines' prime investment targets</p>
				<br/>
				<div id="donutchart" style="width: 500px; height: 300px;"></div>
			</aside>
			
		</div>
			<div id="chart_div"></div>
			<div id="miscstuff">
			<div id="entryfiller" style="float: left; background-image: url(assets/images/companions/Jessica.jpg);">
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
				<aside id="infospace">
				<h2>Jessica Jung</h2>
				<p class="firsttwo">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</aside>
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