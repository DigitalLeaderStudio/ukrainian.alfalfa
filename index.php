<?php
$cookie_name = "bookie";
$cookie_value = "doraley666";
setcookie($cookie_name, $cookie_value, time() + (86400 * 300), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html>
<head>
<title>Ukrainian Alfalfa Hay</title>
	<meta name="description"
		content="Ukrainian Alfalfa is the biggest alfalfa hay exporter from Ukraine. Alfalfa bales and alfalfa pellets for livestock. Grades, prices, packing, shipment.">
	<meta name="keywords" content="alfalfa, hay, bales, pellets,
		ukrainian alfalfa, prices, shipment, grades, terms">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="home">
<?php include_once("google-tag-manager.php") ?>
<?php include("_partials/header.php"); ?>

<section>
	<h1>Alfalfa hay</h1>
	<div class="shop-front">
		<div>
			<a class="bales" href="alfalfa-hay-bales.php"
				title="Learn more about ukrainian alfalfa bales">
				<div class="image">
					<img src="img/ukrainian-alfalfa-bales.png"
						alt="Ukrainian alfalfa bales for export" />
 				</div>
				<div class="text">
					<h2>Bales</h2>
					<p>Alfalfa hay bales are used as animal feed or fertilizer for
					gardening.</p>
				</div>
			</a>
		</div>
		<div>
			<a class="pellets" href="alfalfa-hay-pellets.php"
				title="Learn more about ukrainian alfalfa pellets">
				<div class="image">
					<img src="img/ukrainian-alfalfa-pellets.png"
						alt="Ukrainian alfalfa pellets for export" />
				</div>
				<div class="text">
					<h2>Pellets</h2>
					<p>Alfalfa pellets manufactured from artificially
						dried alfalfa hay for horses, cattle, pigs, chickens, sheep,
						goats and rabbits.</p>
				</div>
			</a>
		</div>
	</div>

	<div class="text-wrapper">
		UKRAINIAN ALFALFA LLC 2016
	</div>
</section>

<?php include_once("analyticstracking.php") ?>
</body>
</html>
