<?php

$EmailFrom = Trim(stripslashes($_POST['email']));
$EmailTo = "seahawaiitours@gmail.com";
$name = Trim(stripslashes($_POST['name'])); 
$email = Trim(stripslashes($_POST['email'])); 
$subject = Trim(stripslashes($_POST['subject'])); 
$message = Trim(stripslashes($_POST['message']));



// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "E-mail: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject";
$Body .= $subject;
$Body .= "\n";
$Body .= "Message";
$Body .= $message;
$Body .= "\n";



// send email 
mail($EmailTo, $subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
//if ($success){
//  print "<meta http-equiv=\"refresh\" content=\"0;thankyou.php\">";
//}
//else{
//  print "<meta http-equiv=\"refresh\" content=\"0;URL=404.php\">";
//}
?>
