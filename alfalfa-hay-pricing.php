<?php
$cookie_name = "bookie";
$cookie_value = "doraley666";
setcookie($cookie_name, $cookie_value, time() + (86400 * 300), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html>
<head>
<title>Alfalfa Hay Pricing</title>
	<meta name="description" content="Alfalfa hay bales and pellets export pricing.">
	<meta name="keywords" content="alfalfa, prices, pricing, lucerne, hay, pellets,
		ukrainian alfalfa, grades, payment terms">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="pricing">
<?php include_once("google-tag-manager.php") ?>
<?php include("_partials/header.php"); ?>
<div class="container">
	<h1>Alfalfa hay pricing</h1>

	<section>
		<h2>Alfalfa bales prices</h2>
		<p>Prices are on FOB basis and denoted for one metric ton</p>
		<p>Learn more about
			<a href="alfalfa-hay-quality-standarts.php"
				title="Alfalfa hay quality standarts">
				alfalfa hay grades and quality standarts</a>
		</p>
		<h3>Grade 5. Low</h3>
		<div class="price-table grade-5">
			<div>
				<div>1 container</div>
				<div>$137</div>
					<div class="buy-btn">
						<a href="buy.php?product=Bales&grade=Grade 5. Low&amount=1&price=$137"
							title="buy alfalfa hay bales of low grade with price of $137">Buy</a>
					</div>
			</div>
			<div>
				<div>2-5 containers</div>
				<div>$132</div>
				<div class="buy-btn">
					<a href="buy.php?product=Bales&grade=Grade 5. Low&amount=2-10&price=$132"
						title="buy alfalfa hay bales of low grade with price of $132">Buy</a>
				</div>
			</div>
			<div>
				<div>6+ containers</div>
				<div>$127</div>
				<div class="buy-btn">
					<a href="buy.php?product=Bales&grade=Grade 5. Low&amount=more than 10&price=$127"
						title="buy alfalfa hay bales of low grade with price of $127">Buy</a>
				</div>
			</div>
		</div> <!-- end grade 5 -->

		<h3>Grade 4. Fair</h3>
		<div class="price-table grade-4">
			<div>
				<div>1 container</div>
				<div>$182</div>
					<div class="buy-btn">
						<a href="buy.php?product=Bales&grade=Grade 4. Fair&amount=1&price=$182"
							title="buy alfalfa hay bales of fair grade with price of $182">Buy</a>
					</div>
			</div>
			<div>
				<div>2-5 containers</div>
				<div>$175</div>
				<div class="buy-btn">
					<a href="buy.php?product=Bales&grade=Grade 4. Fair&amount=2-10&price=$175"
						title="buy alfalfa hay bales of fair grade with price of $175">Buy</a>
				</div>
			</div>
			<div>
				<div>6+ containers</div>
				<div>$168</div>
				<div class="buy-btn">
					<a href="buy.php?product=Bales&grade=Grade 4. Fair&amount=more than 10&price=$168"
						title="buy alfalfa hay bales of fair grade with price of $168">Buy</a>
				</div>
			</div>
		</div> <!-- end grade 4 -->

	</section>

	<section>
		<h2>Alfalfa pellets prices</h2>
		<p>Prices are on FOB basis and denoted for one ton</p>
		<p>Learn more about
			<a href="alfalfa-hay-quality-standarts.php"
				title="Alfalfa hay quality standarts">
				alfalfa hay grades and quality standarts</a>
		</p>
		<h3>Grade 5. Low</h3>
		<div class="price-table grade-5">
			<div>
				<div>1 container</div>
				<div>$205</div>
					<div class="buy-btn">
						<a href="buy.php?product=Pellets&grade=Grade 5. Low&amount=1&price=$205"
							title="buy alfalfa hay pellets of low grade with price of $205">Buy</a>
					</div>
			</div>
			<div>
				<div>2-5 containers</div>
				<div>$197</div>
				<div class="buy-btn">
					<a href="buy.php?product=Pellets&grade=Grade 5. Low&amount=2-10&price=$197"
						title="buy alfalfa hay pellets of low grade with price of $197">Buy</a>
				</div>
			</div>
			<div>
				<div>6+ containers</div>
				<div>$189</div>
				<div class="buy-btn">
					<a href="buy.php?product=Pellets&grade=Grade 5. Low&amount=more than 10&price=$189"
						title="buy alfalfa hay pellets of low grade with price of $189">Buy</a>
				</div>
			</div>
		</div> <!-- end grade 4 -->

		<h3>Grade 4. Fair</h3>
		<div class="price-table grade-4">
			<div>
				<div>1 container</div>
				<div>$217</div>
					<div class="buy-btn">
						<a href="buy.php?product=Pellets&grade=Grade 4. Fair&amount=1&price=$217"
							title="buy alfalfa hay pellets of fair grade with price of $217">Buy</a>
					</div>
			</div>
			<div>
				<div>2-5 container</div>
				<div>$208</div>
				<div class="buy-btn">
					<a href="buy.php?product=Pellets&grade=Grade 4. Fair&amount=2-10&price=$208"
						title="buy alfalfa hay pellets of fair grade with price of $208">Buy</a>
				</div>
			</div>
			<div>
				<div>6+ containers</div>
				<div>$199</div>
				<div class="buy-btn">
					<a href="buy.php?product=Pellets&grade=Grade 4. Fair&amount=more than 10&price=$199"
						title="buy alfalfa hay pellets of fair grade with price of $199">Buy</a>
				</div>
			</div>
		</div> <!-- end grade 5 -->

	</section>

	<section>
		<h2>Terms</h2>
		<div class="text-wrapper">
			<dl>
				<dt>Currency</dt>
				<dd>USD</dd>

				<dt>Payment Terms</dt>
				<dd>T/T</dd>
			</dl>
			<dl>
				<dt>Shipping Terms</dt>
				<dd>FOB (Free on Board)</dd>

				<dt>Freight Price</dt>
				<dd><a href="ukrainian-alfalfa-contacts.php" title="contact us for freight quotations">Ask us for recent freight quotation to
					your port</a></dd>
				</dl>
			</div>
	</section>

	<section>
		<h2>Bank details</h2>
		<div class="text-wrapper">
			<dl>
				<dt>Bank account</dt>
				<dd>26006052606138</dd>

				<dt>Bank name</dt>
				<dd>Privatbank, Dnipropetrovsk, Ukraine</dd>
			</dl>
			<dl>
				<dt>Bank SWIFT Code</dt>
				<dd>PBANUA2X</dd>

				<dt>IBAN Code</dt>
				<dd>UA 5830 0711 0000 0260 0605 2606 138</dd>
			</dl>
		</div>
	</section>

	<section>
		<div class="date">Last update: October 11, 2016</div>
	</section>

	<section class="subscribe">
		<h2 style="text-align: center">Subscribe to prices changes</h2>
		<div class="box">
			<form method="post" action="subscription-handler.php" role="form">
				<div>
					<input class="email"
						type="email"
						placeholder="your@email.com"
						name="email" required />
				</div>
				<div>
					<input class="button"
						name="subscribe"
						type="submit"
						value="Subscribe" />
				</div>
			</form>
		</div>
	</section>

	<div class="greeting">Welcome to Ukrainian Alfalfa</div>
</div>

<?php include("_partials/footer.php"); ?>
<?php include_once("analyticstracking.php") ?>
</body>
</html>
