<?php
if(!isset($_POST['submit'])){
	//This page should not be accessed directly. Need to submit the form.
	echo "Error: ¡Tiene que acceder por el formulario!";
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email)){
    echo "¡Nombre y email son obligatorios!";
    exit;
}

if(IsInjected($visitor_email)){
    echo "¡Valor de email inválido!";
    exit;
}

$email_from = 'tom@amazing-designs.com';//<== update the email address
$email_subject = "New Form submission";

require('email_body.php');

//$email_body = "You have received a new message from the user $name.\n".
//    "Here is the message:\n $message".
    
$to = "tom@amazing-designs.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

//Send the email!
mail($to,$email_subject,$email_body,$headers);

//done. redirect to thank-you page.
header('Location: thank-you.php');


// Function to validate against any email injection attempts
function IsInjected($str){
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str)){
    return true;
  } else {
    return false;
  }
}
   
?> 