<?php
require 'PHPMailer/PHPMailerAutoload.php';

$za=$_POST['za'];
$zadeva=$_POST['zadeva'];
$sporocilo=$_POST['sporocilo'];

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'livecv.sup@gmail.com';          // SMTP username
$mail->Password = 'Livecv123'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('livecv.sup@gmail.com', 'Support');
$mail->addReplyTo('glogovsekgal99@gmail.com', 'Gal');
$mail->addAddress("$za");   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = "<p>$sporocilo</p>";

$mail->Subject = "$zadeva";
$mail->Body    = $bodyContent;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
