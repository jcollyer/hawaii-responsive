<?php

$EmailFrom = Trim(stripslashes($_POST['email'])); 
$EmailTo = "seahawaiitours@gmail.com";
$Subject = "Room Request Form";
$name = Trim(stripslashes($_POST['name'])); 
$email = Trim(stripslashes($_POST['email'])); 
$cell_phone = Trim(stripslashes($_POST['cell_phone'])); 
$nationality = Trim(stripslashes($_POST['nationality']));
$roomate_names = Trim(stripslashes($_POST['$roomate_names']));


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
$Body .= "Cell Phone Number";
$Body .= $cell_phone;
$Body .= "\n";
$Body .= "Nationality: ";
$Body .= $nationality;
$Body .= "\n";
$Body .= "Roomate Names Requested: ";
$Body .= $roomate_names;
$Body .= "\n";


// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;thankyou.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=404.php\">";
}
?>