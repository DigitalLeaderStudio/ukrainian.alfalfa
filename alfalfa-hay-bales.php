<?php
//if(session_status() != PHP_SESSION_ACTIVE) session_start();
//include 'ip.php';
$cookie_name = "bookie";
$cookie_value = "doraley666";
setcookie($cookie_name, $cookie_value, time() + (86400 * 300), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html>
<head>
<title>Alfalfa Hay Bales</title>
	<meta name="description" content="Alfalfa hay bales export from Ukraine.
		Alfalfa bales for livestock with different sizes and prices.">
	<meta name="keywords" content="alfalfa, lucerne, hay, bales,
		ukrainian alfalfa, prices, shipment, grades, terms, details">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
	</script>
</head>
<body class="product bales">
<?php include_once("google-tag-manager.php") ?>
<?php include("_partials/header.php"); ?>

<section>
	<h1>Alfalfa Hay Bales</h1>
	<main>
		<!-- product header -->
		<div class="cover">
			<img src="img/ukrainian-alfalfa-bales.png"
				alt="ukrainian alfalfa hay bales prices" />
		</div>
		<div class="product-header">
			<div>
				<h2>Alfafla bales description</h2>
				<p>Alfalfa hay bales are used as animal feed or fertilizer for
					gardening.</p>
			</div>
		</div> <!-- end product header -->

		<!-- general info -->
		<div class="general-info">
			<h2>General informaton</h2>
			<div class="text-wrapper">
				<dl>
					<dt>Origin</dt>
					<dd>Ukraine</dd>

					<dt>Monthly capacity</dt>
					<dd>1000 tons</dd>

					<dt>Year of harvesting</dt>
					<dd>2016</dd>
				</dl>
				<dl>
					<dt>Methods of use</dt>
					<dd>Animal feed, fertilizer</dd>

					<dt>Animals list</dt>
					<dd>Horse, cattle, deer, pig, chicken, goat, sheep</dd>

					<dt>Shelf life</dt>
					<dd>1 year</dd>
				</dl>
			</div>
		</div> <!-- end general info -->

		<!-- shipment -->
		<div class="shipment">
			<h2>Shipment</h2>
			<div class="text-wrapper">
				<dl>
					<dt>Port of Embarkation</dt>
					<dd>Odessa, Ukraine</dd>

					<dt>Shipping Terms</dt>
					<dd>FOB, CFR (CIF)</dd>
				</dl>
				<dl>
					<dt>Container Capacity (kgm)</dt>
					<dd>19 000</dd>

					<dt>Transit Time</dt>
					<dd>10-36</dd>
				</dl>
				<p>You can also get to know approximate freight price and shipment time
					using this third party service:
					<a href="https://www.searates.com/" title="Freight quotations">Sea Rates</a> </p>
			</div>
		</div> <!-- end shipment -->

		<!-- packing -->
		<div class="packing">
			<h2>Packing</h2>
			<div class="text-wrapper">
				<p>We meet our customers needs and ready to deliver alfalfa hay
					in several bale types.</p>
					<p>These are:</p>
					<ul>
						<li>15 kgm</li>
						<li>20-25 kgm</li>
						<li>300 kgm</li>
						<li>700 kgm</li>
					</ul>
			</div>
		</div> <!-- end packing -->

		<!-- date -->
		<div class="text-wrapper date">Last update: October 11, 2016</div>
	</main>

	<!-- calc -->
	<aside>
		<div id="getFixed">
			<form method="post" action="pellets-handler.php" role="form">
				<div class="buy-box">
					<h3>Contact us now</h3>
					<input class="email"
						type="email"
						placeholder="your@email.com"
						name="email" required />
					<textarea name="message" class="message" required>message</textarea>
					<input class="button"
						name="buy"
						type="submit"
						value="Send" />
				</div>
			</form>
		</div>
	</aside> <!-- end -->

	<div class="greeting">Welcome to Ukrainian Alfalfa</div>
</section>

<?php include("_partials/footer.php"); ?>

<script>
if (window.innerWidth >= 1100) {
	var aside = document.querySelector('aside');
	var asidePosition = aside.getBoundingClientRect();
	var width = asidePosition.width + "px";
	jQuery(function($) {
	  function fixDiv() {
	    var $cache = $('#getFixed');
	    if ($(window).scrollTop() > 210)
	      $cache.css({
	        'position': 'fixed',
	        'top': '10px',
					'width': width
	      });
	    else
	      $cache.css({
	        'position': 'relative',
	        'top': 'auto'
	      });
	  }
	  $(window).scroll(fixDiv);
	  fixDiv();
	});
}
</script>
<?php include_once("analyticstracking.php") ?>
</body>
</html>
