<?php
$name = $_POST["name"];
$phone = $_POST["phone"];
$age = $_POST["age"];

$EmailTo = "dinesh.hnh@gmail.com,sonpreet.priyam@gmail.com,durgesh@webanaya.com";
$EmailFrom = "info@webanaya.com";
$Subject = "Cutie Pie - You have received New Enquiry";

// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";

$Body .= "Age: ";
$Body .= $age;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$EmailTo);

// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}

?>
