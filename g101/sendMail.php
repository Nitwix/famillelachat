<?php
function redirect($url,$duration){ //redirects to url after a certain duration
	echo "<html>
    <head>
        <meta http-equiv='refresh' content='$duration;url=$url' />
    </head>
    <body></body></html>";
	return;
}

$lang = htmlspecialchars($_POST['lang']);
$got_error = false;

//verify the captcha
$email;$msg;$captcha;
if(isset($_POST['email'])){
	$email=$_POST['email'];
}if(isset($_POST['msg'])){
	$msg=$_POST['msg'];
}if(isset($_POST['g-recaptcha-response'])){
	$captcha=$_POST['g-recaptcha-response'];
}
if(!$captcha){
	redirect("contact.php?lang=$lang&err=ERR_CAPTCHA_NOT_TICKED",0);
	$got_error = true;
}
$secretKey = "6LfFDyoUAAAAAPwUdmb9gX6p1dzGOsNd1qL0q6xA";
$ip = $_SERVER['REMOTE_ADDR'];
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
$responseKeys = json_decode($response,true);
if(intval($responseKeys["success"]) !== 1) {
	redirect("contact.php?lang=$lang&err=ERR_CAPTCHA_NOT_VALID",0);
	$got_error = true;
}


$email = htmlspecialchars($_POST['email']);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	redirect("contact.php?lang=$lang&err=ERR_EMAIL_NOT_VALID",0);
	$got_error = true;
}
$msg = "Message envoyé par <a href='mailto:$email'>$email</a><br><br>";
$msg .= htmlspecialchars($_POST['msg']);
if($msg == ''){ //if the message is blank
	redirect("contact.php?lang=$lang&err=ERR_MSG_BLANK",0);
	$got_error = true;
}

$info_mail = "info@famillelachat.com"; //l'email du receveur (nous)
$subject = "Question de ".$email." à propos de l'appartement";

//mail headers
$headers = "From: " . $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$success = false;
if(!$got_error){
	//sending the actual mail if there were no errors
	$success = mail($info_mail, $subject, $msg, $headers);
}
if($success && !$got_error){
	redirect("contact.php?lang=$lang&sent=true",0);
}

?>