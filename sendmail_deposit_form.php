<?php

$EmailFrom = Trim(stripslashes($_POST['email']));
$EmailTo = "seahawaiitours@gmail.com";
$Subject = "Deposit Form";
$first_name = Trim(stripslashes($_POST['first_name'])); 
$last_name = Trim(stripslashes($_POST['last_name'])); 
$gender = Trim(stripslashes($_POST['gender'])); 
$exchange_host = Trim(stripslashes($_POST['exchange_host']));
$exchange_usa = Trim(stripslashes($_POST['exchange_usa']));
$host_family_name = Trim(stripslashes($_POST['host_name']));
$street_address = Trim(stripslashes($_POST['street_address']));
$city = Trim(stripslashes($_POST['city']));
$state = Trim(stripslashes($_POST['state']));
$zip_code = Trim(stripslashes($_POST['zip_code']));
$country = Trim(stripslashes($_POST['country']));
$phone = Trim(stripslashes($_POST['phone']));
$student_phone = Trim(stripslashes($_POST['student_phone']));
$email = Trim(stripslashes($_POST['email']));
$host_family_email = Trim(stripslashes($_POST['email_host']));
$rep_name = Trim(stripslashes($_POST['rep_name']));
$rep_number = Trim(stripslashes($_POST['rep_number']));
$notes = Trim(stripslashes($_POST['notes']));

$tour = Trim(stripslashes($_POST['tour']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "First name: ";
$Body .= $first_name;
$Body .= "\n";
$Body .= "Last name: ";
$Body .= $last_name;
$Body .= "\n";
$Body .= "Gender: ";
$Body .= $gender;
$Body .= "\n";
$Body .= "Exchange host: ";
$Body .= $exchange_host;
$Body .= "\n";
$Body .= "Exchange USA: ";
$Body .= $exchange_usa;
$Body .= "\n";
$Body .= "Host name: ";
$Body .= $host_family_name;
$Body .= "\n";
$Body .= "Street address: ";
$Body .= $street_address;
$Body .= "\n";
$Body .= "City: ";
$Body .= $city;
$Body .= "\n";
$Body .= "State: ";
$Body .= $state;
$Body .= "\n";
$Body .= "Zip: ";
$Body .= $zip_code;
$Body .= "\n";
$Body .= "Country: ";
$Body .= $country;
$Body .= "\n";
$Body .= "Phone number: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Student phone: ";
$Body .= $student_phone;
$Body .= "\n";
$Body .= "Rep name: ";
$Body .= $rep_name;
$Body .= "\n";
$Body .= "Rep number: ";
$Body .= $rep_number;
$Body .= "\n";
$Body .= "Notes: ";
$Body .= $notes;
$Body .= "\n";

$Body .= "Tour: ";
$Body .= $tour;
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