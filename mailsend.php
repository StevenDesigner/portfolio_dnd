
<?php

error_reporting(1);
require_once 'mail/class.phpmailer.php';
include("mail/class.smtp.php"); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = htmlspecialchars($_POST['name']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // You can store the message or send it via email, but for this case,
    // we'll just redirect to the index page with a success message in the URL.
    
    // Redirect to index.html with success message




$all="Name:$name, mobile: $mobile, email: $email, message: $message";
	

	$address="stephenrajwilson@gmail.com";
	$subject="Enquiry from Portfolio";


	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Username = "stephenrajprime@gmail.com";
	$mail->Password = "gbcq ravy huqx raod";
	$mail->SetFrom($email,'');
	$mail->Subject = $subject;
	$mail->AddAddress($address);
	$mail->MsgHTML($all);
	$mail->Send();



	header("Location: index.html?success=true");
    exit();
}	
?>

