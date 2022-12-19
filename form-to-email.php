<?php
if(!issets($_POST['submit']))
{//this page should not be accessed directly. need to sumbit the form.
echo "error; you need to sumbit the form!;"
}
$name =$_POST['name'];
$visitor_email = $_POST['email'];
$message =$_POST['message'];
validate first
if (empty($sname)||empty($visitor_email))
{echo "Name and email are mandatory!";exit;}

$email_from = 'aliyafeggins@gmail.com';//my email
$email_subject= "new form submissin";
$email_body="You have recieves a new message from the user $name. \n".
	"email address: $visitor_email\n".
	"here is the messege:\n $message".

$to = "aliyafeggins@gmail.com";
$headers= "from: $email_from \r\n";

send email
mail($to,$email_subject,$email_body;$headers);
$to="aliyafeggins@gmail.com";
$headers="from: $email_fromi";

?>
