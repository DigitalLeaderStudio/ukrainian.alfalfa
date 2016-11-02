<?php // pellets page handler
// start session
// if(session_status() != PHP_SESSION_ACTIVE) session_start();
//
//
// // data & logic
// $FOB = 0;
// $total_FOB = 0;
// $total_CIF = 0;
// $grade = 0;
// $quantity = 0;
// $freight = 0; // per ton
// $port = "-";
// $total_text = "";
// $container_capacity = 22; // tons
//
// if (isset($_POST['calc'])) {
// 	if(isset($_POST['grade'])) {
// 		$grade = test_input($_POST['grade']);
// 		$FOB = grade_price($grade);
// 		$total_text = "Please, set quantity";
// 		if (isset($_POST['quantity']) && $_POST['quantity'] != ""
// 		&& $_POST['quantity'] != 0 && is_numeric($_POST['quantity'])) {
// 			$quantity = test_input($_POST['quantity']);
// 			$total_FOB = $FOB * $quantity;
// 			$total_text = "Total FOB price is " . $total_FOB . " USD";
// 			if (isset($_POST['port']) && $_POST['port'] != "not-set") {
// 				$port = test_input($_POST['port']);
// 				$freight = port_freight($port, $container_capacity);
// 				$total_CIF = $freight * $quantity + $total_FOB;
// 				$total_text = "Total CIF price is " . $total_CIF . " USD";
// 			}
// 		}
// 	}
// 	$_SESSION['grade'] = $grade;
// 	$_SESSION['quantity'] = $quantity;
// 	$_SESSION['port'] = $port;
//  	$_SESSION['total_text'] = $total_text;
//
// 	// email sending goes here
// 	$to = "s.kalaida.biz@gmail.com";
// 	$subject = "alfalfa.ua: Activity on the website!";
//
// 	$message = "
// 	<html>
// 	<head>
// 		<title>HTML email</title>
// 	</head>
// 	<body>
// 		<h1>Someone has used pellets calculator.</h1>
// 		<p><span style='font-weight: bold;'>Grade:</span> ". $grade ."</p>
// 		<p><span style='font-weight: bold;'>FOB:</span> ". $FOB ."</p>
// 		<p><span style='font-weight: bold;'>Quantity:</span> ". $quantity ."</p>
// 		<p><span style='font-weight: bold;'>Port:</span> ". $port ."</p>
// 		<p><span style='font-weight: bold;'>Freight:</span> ". $freight ."</p>
// 		<p><span style='font-weight: bold;'>Total:</span> ". $total_text ."</p>
// 	</body>
// 	</html>
// 	";
//
// 	$headers = "MIME-Version: 1.0" . "\r\n";
// 	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// 	$headers .= 'From: <admin@alfalfa.in.ua>' . "\r\n";
// 	//$headers .= 'Cc: myboss@example.com' . "\r\n";
// 	mail($to, $subject, $message, $headers);
//
// 	// redirect back to pellets.php
// 	header("Location:" . "pellets.php");
// 	exit();
// }
// elseif (isset($_POST['buy'])) {
// 	if(isset($_POST['grade'])) {
// 		$grade = test_input($_POST['grade']);
// 		$FOB = grade_price($grade);
// 		$total_text = "Please, set quantity";
// 		if (isset($_POST['quantity']) && $_POST['quantity'] != ""
// 		&& $_POST['quantity'] != 0 && is_numeric($_POST['quantity'])) {
// 			$quantity = test_input($_POST['quantity']);
// 			$total_FOB = $FOB * $quantity;
// 			$total_text = "Total FOB price is " . $total_FOB . " USD";
// 			if (isset($_POST['port']) && $_POST['port'] != "not-set") {
// 				$port = test_input($_POST['port']);
// 				$freight = port_freight($port, $container_capacity);
// 				$total_CIF = $freight * $quantity + $total_FOB;
// 				$total_text = "Total CIF price is " . $total_CIF . " USD";
// 			}
// 		}
// 	}
// 	$_SESSION['grade'] = $grade;
// 	$_SESSION['quantity'] = $quantity;
// 	$_SESSION['port'] = $port;
//  	$_SESSION['total_text'] = $total_text;

if(isset($_POST['email'])) $email = test_input($_POST['email']);
if(isset($_POST['message'])) $message = test_input($_POST['message']);

// email sending goes here
//$to = "s.kalaida.biz@gmail.com";
$to = "s.kalaida.biz@gmail.com, ukrainian.alfalfa@gmail.com";
$subject = "alfalfa.ua: Someone wants to BUY PELLETS!";

$message = "
<html>
<head>
	<title>HTML email</title>
</head>
<body>
	<h1>Buy inquiry!</h1>
	<p><span style='font-weight: bold;'>Product:</span> PELLETS</p>
	<p><span style='font-weight: bold;'>Email:</span> ". $email ."</p>
	<p><span style='font-weight: bold;'>Message:</span> ". $message ."</p>
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




function grade_price($grade) {
	$price = 0;
	switch ($grade) {
    case "grade-1":
        $price = 500;
        break;
		case "grade-2":
        $price = 400;
        break;
		case "grade-3":
        $price = 300;
        break;
		case "grade-4":
        $price = 200;
        break;
		case "grade-5":
        $price = 100;
        break;
		}
	return $price;
}

function port_freight($port, $container_capacity) {
	$freight = 0;
	switch ($port) {
    case "UAE":
        $freight = 1700;
        break;
		case "Kuwait":
        $freight = 1760;
        break;
		case "Nigeria":
        $freight = 2200;
        break;
		case "Morocco":
        $freight = 1800;
        break;
		case "Egypt":
        $freight = 1100;
        break;
		}
	return ceil($freight / $container_capacity);
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


?>
