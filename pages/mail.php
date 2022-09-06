<?php
//get data from form  
$firstname = $_POST['First-Name'];
$lastname = $_POST['Last-Name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "mormleapsovann555@mail.com";
$subject = "Mail From website";
$txt ="First Name: ". $firstname . "\r\nLast Name: " . $lastname ."\r\n  Email: " . $email . "\r\n Message: " . $message;
$headers = "From: noreply@wolf3team.com" . "\r\n" .
"CC: somebodyelse@example.com";
if(empty($firstname) || empty($lastname) || empty($email) || empty($message) || empty($to))
{
    mail($to,$subject,$txt,$headers);
    echo "<script typ='text/javascript'>alert('Message Sent Successfully!');
        window.history.go(-1);
        </script>";
}
//redirect
header("Location:thankyou.html");
?>
