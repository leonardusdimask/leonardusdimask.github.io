<?php
if(!empty($POST["send"])) {
	$name = $POST["userName"];
	$email = $POST["userEmail"];
	$subject = $POST["subject"];
	$content = $POST["content"];

	$toEmail = "dimascahls@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact-view.php";
?>