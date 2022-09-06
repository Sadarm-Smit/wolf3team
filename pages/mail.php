<?php
//get data from form  
    $name = $_POST['name'];
    $from = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message']; 
    $to = 'mormleapsovann555@email.com'; 
    // $txt ="First Name: ". $firstname . "\r\nLast Name: " . $lastname ."\r\n  Email: " . $email . "\r\n Message: " . $message .;
    $txt ="Name: " . $name ."\r\n  Email: " . $email . "\r\n Message: " . $message .;
    $headers = "From: noreply@wolf3team.com" .

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if($_POST['submit']) {
        if(mail($to,$subject,$txt,$headers)) {
            echo '<p style="color: #27ae60;">Your message has been sent!</p>';
        } else {
            echo '<p style="color:#c0392b;">Something went worng, go back and try again!</p>';
        }
            // mail($to,$subject,$txt,$headers);
        // echo "<script type='text/javascript'>alert('Message Sent Successfully!');
        //     window.history.go(-1);
        //     </script>";
    }
    //redirect
    header("Location:thankyou.html");
?>
