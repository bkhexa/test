
<?php
// Check if the form is submitted
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Get the form data
//     $name = $_POST['name'];
//     $company = $_POST['company'];
//     $number = $_POST['number'];
//     $email = $_POST['email'];
//     $tenant = $_POST['tenant'];

//     // Set the recipient email address
//     $to = 'kalidasankarthick@gmail.com';

//     // Set the email subject
//     $subject = 'Contact Form Submission';

//     // Set the email message
//     $emailMessage = "Name: $name\n";
//     $emailMessage .= "Company Name: $company\n";
//     $emailMessage .= "Phone Number: $number\n";
//     $emailMessage .= "Email ID:\n$email";
//     $emailMessage .= "Tenant ID : $tenant\n";

//     // Set the email headers
//     $headers = "From: $email\r\n";
//     $headers .= "Reply-To: $email\r\n";

//     // Send the email
//     $mailSent = mail($to, $subject, $emailMessage, $headers);

//     // Check if the email was sent successfully
//     if ($mailSent) {
//         echo 'OK';
//     } else {
//         echo 'An error occurred. Please try again.';
//     }
// }
// additional  next test 

//get data from form  
$name = $_POST['name'];
$company = $_POST['company'];
$number = $_POST['number'];
$email = $_POST['email'];
$tenant = $_POST['tenant'];



$to = "kalidasankarthick@gmail.com";
$subject = "New Saas Enquiry";

$txt ="Name = ". $name . "\r\n  Company Name = " . $company . "\r\n Phone Number =" . $number ."\r\n Email ID =" . $email ."\r\n Tenant ID =" . $tenant;
$headers = "From: noreply@bondreco.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>