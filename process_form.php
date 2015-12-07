<?php
$name=$_POST['name'];
$school=$_POST['school'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$msg=$_POST['msg'];
 
$to = "s.mandes86@gmail.com";
$subject = "Testing Form - Hey There!";
$message = " Name: " . $name . "\r\n School: " . $school . "\r\n Phone: " . $phone . "\r\n Email: " . $email . "\r\n Message: " . $msg;
 
$from = "Live Without Limitations";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";
 
if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='http://www.stevemandes.com/demo/lwl/success.html';</script>";
}else{
  echo "Error! Please try again.";
}
?>