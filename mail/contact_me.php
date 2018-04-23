
<?php

$name = $_POST['name'];
$emai = $_POST['email'];
$message = $_POST['message'];

$to = 'nahid.limu@gmail.com';
$subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
echo "<script>alert('Message Sent')</script>";
return true;
?>