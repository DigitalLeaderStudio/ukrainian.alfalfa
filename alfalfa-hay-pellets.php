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
<title>Alfalfa Hay Pellets</title>
	<meta name="description" content="Alfalfa hay pellets export from Ukraine.
		Alfalfa pellets for livestock with different packing and prices.">
	<meta name="keywords" content="alfalfa, lucerne, hay, pellets,
		ukrainian alfalfa, prices, shipment, grades, terms, details">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
	</script>
</head>
<body class="product pellets">
<?php include_once("google-tag-manager.php") ?>
<?php include("_partials/header.php"); ?>

<section>
	<h1>Alfalfa Hay Pellets</h1>
	<main>
		<!-- product header -->
		<div class="cover">
			<img src="img/ukrainian-alfalfa-pellets.png"
				alt="ukrainian alfalfa hay pellets prices" />
		</div>
		<div class="product-header">
			<div>
				<h2>Alfafla pellets description</h2>
				<p>Alfalfa pellets are used as a substitute for ragular hay and as quality
					vitamin feed with high content of carotene. Alfalfa pellets are
					manufactured from artificially dried alfalfa hay. It contains no
					premixes and GMOs and is eligible for horses, cattle, pigs, chickens,
					sheep, goats and rabbits.</p>
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
			<div class="text-wrapper">
				<p></p>
				<h3>More details</h3>
				<p>Alfalfa pellets is an economical way of feeding of farm animals and
					birds. It significantly reduces the consumption of grain in the
					production of meat or milk. Alfalfa pellets are easier to digest than
					hay, provide a good weight gain and milk yield.</p>
				<p>The use of specialized equipment for the production of alfalfa pellets
					allows to avoid significant loss of raw material, which is observed
					during the natural alfalfa drying. Also, this method of manufacture
					eliminates the adverse effects of moisture and leakage of different
					biochemical and microbiological processes.</p>
				<p>Alfalfa pellets are good for storage, unlike the hay made by the
					usual method, which can become caked, rot or moldy. When Alfalfa grass
					is dried artificially, content of fodder units increases at least in
					 1.5 times, proteins – 1.6, carbohydrates – 3.5 and carotene – in 78 times.</p>
				<p></p>
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
					<dd>22 000</dd>

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
				<p>We meet our customer needs and ready to pack alfalfa pellets
					in several bag types.</p>
					<p>These are:</p>
					<ul>
						<li>30 kg bags</li>
						<li>40 kg bags</li>
						<li>70 kg bags</li>
						<li>1 ton big bags</li>
					</ul>
			</div>
		</div> <!-- end packing -->

		<!-- date -->
		<div class="text-wrapper date">Last update: October 12, 2016</div>
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
