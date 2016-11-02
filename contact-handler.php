<?php
if(isset($_POST['email'])) $email = test_input($_POST['email']);
if(isset($_POST['message'])) $message = test_input($_POST['message']);

// email sending
$to = "s.kalaida.biz@gmail.com, ukrainian.alfalfa@gmail.com";
$subject = "alfalfa.ua: Someone's just contacted us!";

$message = "
<html>
<head>
	<title>HTML email</title>
</head>
<body>
	<h1>New lead!</h1>
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

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
