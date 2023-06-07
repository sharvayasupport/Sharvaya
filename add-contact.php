<?php
require_once("./connect.php");

if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$sql="INSERT INTO contactus (name, email, subject,message) VALUES ('".$name."','".$email."', '".$subject."','".$message."')";
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

echo "<script type='text/javascript'>alert('Thank You For the Contact us');location='contact.php';</script>";

?>