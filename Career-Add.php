<?php 

require_once("./connect.php");

if(isset($_POST['submit']))
{
$name = $_POST['firstname'];
$phone= $_POST['phone'];
$email = $_POST['email'];

$file=$_FILES["resume"]["name"];
	$tmp_name=$_FILES["resume"]["tmp_name"];
	$path="uploads/".$file;
	$file1=explode(".",$file);
	$ext=$file1[1];
	$allowed=array("jpg","png","gif","pdf","wmv","pdf","zip","docx");
	if(in_array($ext,$allowed))
	{
 move_uploaded_file($tmp_name,$path);
 
 $coverletter = $_POST['coverletter'];


 $sql="INSERT INTO career (firstname, phone, email,resume,coverletter) VALUES ('".$name."','".$phone."', '".$email."','".$file."','".$coverletter."')";
if(!$result = $con->query($sql)){
die('There was an error running the query [' . $con->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}

echo "<script type='text/javascript'>alert('Data Uploaded Successfully');location='career.php';</script>";

}
?>

<?php
require('phpmailer/class.phpmailer.php');

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
$mail->SetFrom($_POST["firstname"], $_POST["firstname"]);
$mail->AddReplyTo($_POST["email"], $_POST["firstname"]);
$mail->AddAddress("RECIPIENT_EMAIL");	
$mail->Subject = $_POST["resume"];
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