


<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];
$mail_to = 'jimandrewrogers@gmail.com';
$subject = '#Message# '.$field_name;
$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$email."\r\n";
$headers .= 'Reply-To: '.$email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
 <script language="javascript" type="text/javascript">
  alert('Thank you for the message. We will contact you shortly.');
  window.location = 'https://www.jimandrewrogers.com/songwriting-sessions/';
 </script>
<?php
}
else { ?>
 <script language="javascript" type="text/javascript">
  alert('Message sending failed. Please, send an email to jimandrewrogers@gmail.com');
  window.location = 'https://www.jimandrewrogers.com/songwriting-sessions/';
 </script>
<?php
}
?>
