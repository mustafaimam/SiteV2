<?php
  $firstName= $_POST['firstName'];
  $lastName= $_POST['lastName'];
  $emailAddress = $_POST['emailAddress'];
  $phoneNum = $_POST['phoneNum'];
  $recipient = "mustafa.abdul.razzaq@outlook.com";
  $subject = "Contact From Website";
  $subjectEmail = $_POST['subjectEmail'];
  $mailheader = "From: $emailAddress \r\n";
  mail($recipient, $subject, $subjectEmail, $phoneNum) or  die ("Hmm that didn't work.");
  echo "Thank You!" . " | " . "<a href='index.html' style='text-decoration:none;color:#49211f;'> Return Home</a>";  
?>