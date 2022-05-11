<?php 

$name = $_POST['ime'];
$lastname=$_POST['prezime'];
$email = $_POST['email'];
$message = $_POST['message'];


if ($_POST['submit']) {

$formcontent="From: $name \n $lastname \n Message: $message";
$recipient = "office@dianadjordjevic.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";



if(mail($recipient, $subject, $formcontent, $mailheader)){
echo"<p>Your Message has been successfully sent!</p>";
} else{
	echo "<p>Error! Something went wrong! Try again</p>";}
}

?>
