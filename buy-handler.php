<?php
include('lib.php');

// getting data
if(isset($_POST['product'])) $product = test_input($_POST['product']);
if(isset($_POST['grade'])) $grade = test_input($_POST['grade']);
if(isset($_POST['amount'])) $amount = test_input($_POST['amount']);
if(isset($_POST['price'])) $price = test_input($_POST['price']);
if(isset($_POST['email'])) $email = test_input($_POST['email']);

// email sending
$to = "s.kalaida.biz@gmail.com, ukrainian.alfalfa@gmail.com";
$product = strtoupper($product);
$subject = "alfalfa.ua: " . $product . " ORDER!";

$message = "
<html>
<head>
	<title>HTML email</title>
</head>
<body>
	<h1>New order!</h1>
  <p><span style='font-weight: bold;'>Product:</span> ". $product ."</p>
  <p><span style='font-weight: bold;'>Grade:</span> ". $grade ."</p>
  <p><span style='font-weight: bold;'>Amount:</span> ". $amount ."</p>
  <p><span style='font-weight: bold;'>Price:</span> ". $price ."</p>
  <p><span style='font-weight: bold;'>Email:</span> ". $email ."</p>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <admin@alfalfa.in.ua>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";
mail($to, $subject, $message, $headers);

// redirect back to pellets.php
header("Location:" . "/thanks.php");
exit();

?>
