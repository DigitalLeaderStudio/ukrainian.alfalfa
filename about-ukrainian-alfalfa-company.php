<?php
	$cookie_name = "bookie";
	$cookie_value = "doraley666";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 300), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html>
<head>
<title>About Ukrainian Alfalfa LLC</title>
	<meta name="description" content="Ukrainian Alfalfa LLC. Trading company from
		Ukraine that exports alfalfa hay bales and pellets.">
	<meta name="keywords" content="ukrainian alfalfa, about, company, details,
	 	team, mission, ceo, deputy director, alfalfa, hay, bales, pellets">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="about">
<?php include_once("google-tag-manager.php") ?>
<?php include("_partials/header.php"); ?>

<section>
	<h1>About</h1>
	<div class="cover"></div>
	<!-- overview -->
	<div class="overview">
		<div class="logo">
			<img src="img/ukrainian-alfalfa-logo.png" alt="Ukrainian Alfalfa logo" />
		</div>
		<div class="text">
			<p>
				<span style="font-weight:bold;">"UKRAINIAN ALFALFA" LLC</span>
				is a trading company located in Kyiv, Ukraine, which makes its business
				by exporting large volumes of alfalfa pellets and alfalfa hay. Our
				company started its way on June 1, 2016 and was duly registered on
				August 25, 2016 in Ukraine with identification number of 40773229.
				We work in tight partnership with most of Ukrainian
				manufacturers of alfalfa bales and pallets what gives us an ability
				to supply any customer with any needs.</p>
		</div>
	</div>

	<!-- mission -->
	<div class="mission-wrapper">
		<div class="box">
			<div class="mission">
				<h2>Mission</h2>
				<div class="text-wrapper">
					<p>Our mission is to represent Ukraine on the global market of alfalfa
						delivering qualitetive alfalfa with modern approach in doing global business
						and adhering high standarts of trading processes.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- team -->
	<div class="team-wrapper">
		<div class="box">
			<div class="team">
				<h2>Team</h2>
				<div class="text-wrapper">
					<p>The team working in UKRAINIAN ALFALFA consists of attentive professionals that
						always are up to date with latest conditions and in touch with global
						exporters and importers. We are experts in our business of alfalfa.
						We know everything about alfalfa hay, baling, pelleting, storing,
						logistics, shipments, prices and so on.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- CEO -->
	<div class="wide-box-left">
		<div class="box">
			<h2>Chief Executive Officer</h2>
			<div class="employee">
				<div class="photo">
					<img src="img/anton-valintsev.jpg" alt="Anton Valintsev - CEO" />
				</div>
				<div class="text">
					<blockquote>"We are openminded and friendly. Feel free to contact with
						any of our employees from CEO to sales manager by means of email
						or social networking."</blockquote>
					<p class="author">Anton Valintsev</p>
					<div class="social-links">
						<!-- <a href="#">Facebook</a>
						<a href="#">Twitter</a> -->
						<a href="mailto:anton.valintsev@alfalfa.in.ua"
							title="email to CEO">anton.valintsev@alfalfa.in.ua</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Deputy director -->
	<div class="wide-box-right">
		<div class="box">
			<h2>Deputy director</h2>
			<div class="employee">
				<div class="photo">
					<img src="img/serhii-kalaida.jpg" alt="Serhii Kalaida -Deputy Director" />
				</div>
				<div class="text">
					<blockquote>"All our efforts are geared towards giving our customers
						 the best of services and products that were raised in Ukraine."</blockquote>
					<p class="author">Serhii Kalaida</p>
					<div class="social-links">
						<a href="https://www.facebook.com/serhii.kalaida"
							title="Contact Serhii on Facebook">Facebook</a>
						<a href="https://www.linkedin.com/in/serhiikalaida"
							title="Contact Serhii on LinkedIn">LinkedIn</a>
						<a href="https://twitter.com/serhiikalaida"
							title="Contact Serhii on Twitter">Twitter</a>
						<a href="mailto:serhii.kalaida@alfalfa.in.ua"
							title="Email to Deputy Director">serhii.kalaida@alfalfa.in.ua</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="greeting">Welcome to Ukrainian Alfalfa</div>
</section>

<?php include("_partials/footer.php"); ?>
<?php include_once("analyticstracking.php") ?>
</body>
</html>
