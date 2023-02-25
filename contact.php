<?php
//get data from form  

$Name = $_POST['Name'];

$LName = $_POST['lname'];

$email= $_POST['Email'];

$phnnumber= $_POST['contact'];

$file= $_POST['file'];

$message= $_POST['msg'];

$to = "shashikantkamthe77@gmail.com";

$subject = "Mail From website Medople.com contact";
$txt ="Name: ".$Name."\r\nFile:".$file."\r\nLname: ".$LName."\r\nPhoneNumber: ".$phnnumber."\r\nEmail: ".$email."\r\nMessage: ".$message;


$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>