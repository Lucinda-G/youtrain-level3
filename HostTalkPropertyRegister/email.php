<?php
    

require_once 'PHPMailer-master/src/PHPMailer.php';



$mail = new PHPMailer;

$mail->From = "lucinda.gooding@uk.fujitsu.com";
$mail->FromName = "Lucinda Gooding";

$mail->addAddress("lucinda.gooding@uk.fujitsu.com", "Cindy Gooding");

$mail->addReplyTo("lucinda.gooding@uk.fujitsu.com", "Reply");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()){
    echo "Mailer error: " . $mail->ErrorInfo;
}
else{
    echo "Message has been sent successfully";
}



?> 