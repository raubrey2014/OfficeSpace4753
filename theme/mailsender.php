<!DOCTYPE html>
<html>
<head>
<title>Send Mail Results</title>
</head>
<body>
<?php

function createMailer(){
 

  require_once('phpmailer/PHPMailerAutoload.php');
  

  $mail = new PHPMailer;
 
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPAuth = true; // enable SMTP authentication
  $mail->SMTPSecure = "tls"; // sets tls authentication
  $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server; or your email service
  $mail->Port = 587; // set the SMTP port for GMAIL server; or your email server port
  $mail->Username = "l.b.mein@gmail.com"; // email username
  $mail->Password = "kzuvostyuhogtbcj"; // email password
  $mail->SetFrom("lkb8xt@virginia.edu");

  return $mail;
}

  /*$sender = strip_tags($_POST["sender"]);
  $receiver = strip_tags($_POST["receiver"]);
  $subj = strip_tags($_POST["subject"]);
  $msg = strip_tags($_POST["msg"]);

  // Put information into the message
  $mail->addAddress($receiver);
  //$mail->SetFrom($sender);
  $mail->Subject = "$subj";
  $mail->Body = "$msg";

  // echo 'Everything ok so far' . var_dump($mail);
  if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
   } 
   else { echo 'Message has been sent'; }*/
?>
</body>
</html>
