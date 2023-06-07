<?php
require('./phpmailer/class.phpmailer.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Port     = 465;  
$mail->Username = "nirav.adeshra@sharvayainfotech.com";
$mail->Password = "sharvaya@2022$";
$mail->Host     = "smtp.yandex.com";
$mail->Mailer   = "smtp";
$mail->SetFrom($_POST["mail"], $_POST["firstname"]);
$mail->AddReplyTo($_POST["mail"], $_POST["firstname"]);
$mail->AddAddress("RECIPIENT_EMAIL");	
$mail->Subject = $_POST["coverletter"];
$mail->WordWrap   = 80;
$mail->MsgHTML($_POST["coverletter"]);

foreach ($_FILES["resume"]["name"] as $k => $v) {
    $mail->AddAttachment( $_FILES["resume"]["tmp_name"][$k], $_FILES["resume"]["name"][$k] );
}

$mail->IsHTML(true);

if(!$mail->Send()) {
	echo "<p class='error'>Problem in Sending Mail.</p>";
} else {
	echo "<p class='success'>Mail Sent Successfully.</p>";
}	
?>