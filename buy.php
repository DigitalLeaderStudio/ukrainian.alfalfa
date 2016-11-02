<?php
include('lib.php');
// getting data
if(isset($_GET['product'])) $product = test_input($_GET['product']);
if(isset($_GET['grade'])) $grade = test_input($_GET['grade']);
if(isset($_GET['amount'])) $amount = test_input($_GET['amount']);
if(isset($_GET['price'])) $price = test_input($_GET['price']);

$cookie_name = "bookie";
$cookie_value = "doraley666";
setcookie($cookie_name, $cookie_value, time() + (86400 * 300), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html>
<head>
<title>Buy now</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="buy">
<?php include_once("google-tag-manager.php") ?>
<?php include("_partials/header.php"); ?>

<section>
  <h1>You are ordering</h1>
  <form class="container" action="buy-handler.php" method="post">
    <div class="description">
      <div class="box">
        <div class="table">

          <div class="row">
            <div>Product
              <input name="product" type="hidden" value="<?php echo $product ?>" />
            </div>
            <div><?php echo $product ?></div>
          </div>

          <div class="row">
            <div>Grade
              <input name="grade" type="hidden" value="<?php echo $grade ?>" />
            </div>
            <div><?php echo $grade ?></div>
          </div>

          <div class="row">
            <div>Amount
              <input name="amount" type="hidden" value="<?php echo $amount ?>" />
            </div>
            <div><?php echo $amount ?></div>
          </div>

          <div class="row">
            <div>Price
              <input name="price" type="hidden" value="<?php echo $price ?>" />
            </div>
            <div><?php echo $price ?></div>
          </div>

        </div>
      </div>
    </div>
    <div class="interact">
      <div class="box">
        <h2>Enter your email</h2>
        <input name="email" type="email" placeholder="your email" required />
        <input type="submit" value="Order now"  />
      </div>
    </div>
  </form>

  <div class="box">
    <div class="text-wrapper" style="text-align:right">
      UKRAINIAN ALFALFA LLC 2016
    </div>
  </div>
</section>

<?php include_once("analyticstracking.php") ?>
</body>
</html>
