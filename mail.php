<?php

$name = $_POST[name];
$email = $_POST[email];
$message = $_POST[message];

$mailheader = "From: ".$name."<".$email.">\r\n";

$recipient = "karajleong@hotmail.com";

mail($recipient, $mailheader, $message) or die("Error!");

// echo"Message Sent!";

?>