<html class="no-js" lang="fa"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
</head>
	<body>
<?php


// Replace this with your own email address
$siteOwnersEmail = 'info@offbegir.com';
header('Content-Type: text/html; charset=utf-8');
$error = 0;

if($_POST) {

   $name = trim(stripslashes($_POST['contactName']));
   $email = trim(stripslashes($_POST['contactEmail']));
   $contact_message = trim(stripslashes($_POST['contactMessage']));


   // Check Name
	if ((strlen($name) < 2 )&&(!preg_match('/^[\p{Arabic}\s\-]+$/u', $name))) {
		$error['name'] = "لطفا نام را بصورت صحیح وارد کنید.";
	}
	// Check Email
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "لطفا ایمیل را بصورت صحیح وارد کنید.";
	}
	// Check Message
	if ((strlen($contact_message) < 10) && (!preg_match('/^[\p{Arabic}\s\-]+$/u', $contact_message))) {
		$error['message'] = " لطفا پیام را فارسی وارد کنید حداقل 10 کاراکتر.";
	}
   // Subject
	

$message = " ";
   // Set Message
   $message .= "Email from: " . $name . "<br />";
	$message .= "Email address: " . $email . "<br />";
   $message .= "Message: <br />";
   $message .= $contact_message;
   $message .= "<br /> ----- <br /> This email was sent from your site's contact form. <br />";

      
   // Set From: header
   $from =  $name . " <" . $email . ">";

   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=utf-8\r\n";


   if (!$error) {

      ini_set("sendmail_from", $siteOwnersEmail); // for windows server
      $mail = mail($siteOwnersEmail, $subject, $message, $headers);

		if ($mail) { echo "<h5 style='color:red'>ممنون از ارتباط شما - دراولین درنگ پیام شما پاسخ داده میشود</h5>"; }
      else { echo "<h5 style='color:red'>مشکل در داده های ورودی</h5>"; }
		
	} # end if - no validation error

	else {

		$response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
		$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
		$response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
		
		echo '<h5 style="color:red">'.$response.'</h5>';

	} # end if - there was a validation error

}

?>
		</body>
		</html>
		