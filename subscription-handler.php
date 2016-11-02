<?php

if(isset($_POST['email'])) $email = test_input($_POST['email']);

// email sending goes here
//$to = "s.kalaida.biz@gmail.com";
$to = "s.kalaida.biz@gmail.com, ukrainian.alfalfa@gmail.com";
$subject = "alfalfa.ua: Someone has just SUBSCRIBED to our pricing changes.";

$message = "
<html>
<head>
	<title>HTML email</title>
</head>
<body>
	<h1>New Subscription!</h1>
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
header("Location:" . "/thanks-for-subscription.php");
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
