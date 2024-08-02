<?php
class PHP_Email_Form {
  public $ajax = false;

  public function send($to, $subject, $body, $headers) {
    if(mail($to, $subject, $body, $headers)) {
      return "Message sent successfully!";
    } else {
      return "Message could not be sent.";
    }
  }
}

// Check for empty fields
/*
if(empty($_POST['name']) ||
   empty($_POST['email']) ||
   empty($_POST['message']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
    echo "No arguments Provided!";
    return false;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'mvillegasterrones@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: mvillegasterrones@gmai.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   

if(mail($to,$email_subject,$email_body,$headers)) {
    echo "Message sent successfully!";
} else {
    echo "Message could not be sent.";
}

return true;         
*/
