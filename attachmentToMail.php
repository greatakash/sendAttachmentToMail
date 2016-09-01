<?php
require 'class.phpmailer.php';
$email = new PHPMailer();
$email->From      = 'rajakashxxx@gmail.com';
$email->FromName  = 'Your Name';
$email->Subject   = 'Message Subject';
$bodytext = "hello" ;
$email->Body      = $bodytext;
$email->AddAddress( 'akashr@domain.com');

 $file_to_attach = 'anyfile.txt';

$email->AddAttachment( $file_to_attach , 'anyfile.txt' );
echo "mail sent" ;
return $email->Send();

?>
