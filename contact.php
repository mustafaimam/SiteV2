<?php
  $fname= $_POST['fname'];
  $lname= $_POST['lname'];
  $email = $_POST['email'];
  $cellNum = $_POST['phone'];
  $subject = "Contact From Website";
  $formContent = $_POST['formContent'];
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formContent, $mailheader) or  die ("Hmm that didn't work.");
  echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";  
?>