<?php

/* SETTINGS */
$yourEmail = "your.email@gmail.com";
$emailSubject = "Contact Form";

if($_POST){

  /* DATA FROM HTML FORM */
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $headers = "From: $name <$email>\r\nReply-To: $name <$email>\r\nSubject: $emailSubject\r\nX-Mailer: PHP/" . phpversion();

  /* SEND EMAIL */
  mail($yourEmail, $emailSubject, $message, $headers);
}
?>