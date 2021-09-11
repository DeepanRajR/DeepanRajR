<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$mobile=$_POST['mobile']
$message= $_POST['message'];
$to = "dr447774@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@dream1media.com" . "\r\n Mobile Number =". $number;
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>