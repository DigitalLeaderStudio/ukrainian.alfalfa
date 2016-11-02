<?php
$cookie_name = "bookie";
$cookie_value = "doraley666";
setcookie($cookie_name, $cookie_value, time() + (86400 * 300), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html>
<head>
<title>Thank you!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="thanks">
<?php include_once("google-tag-manager.php") ?>
<?php include("_partials/header.php"); ?>

<section>
  <div class="box">Thank you. Our manager shall contact you soon.</div>
</section>

<?php include_once("analyticstracking.php") ?>
</body>
</html>
