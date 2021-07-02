<?php
//get data from from
$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$disc= $_POST['disc'];


$to = "sonalimishra212001@yahoo.com";

$subject = "mail";

$txt = "NAME"= .$name//ITIS ABOVE L.H.S NAME 
."\r\n EMAIL"= .$email
."\r\n PHONE"= .$phone
."\r\n DISCRIPTION"= .$disc;


//IF MAIL IS NUL

$headers="from :noreply@yoursite.com". "\r\n"
if ($email!=NULL) {
	mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thank.html");
?>