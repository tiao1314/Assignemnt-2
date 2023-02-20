<?php
include 'includes/include.php';
?>
<?php

$errors = '';
$myemail = 'D00244247@student.dkit.ie'; // Put your DkIT email address here.

// make sure these 3 fields are filled out
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required \n Redirecting to contact form in 3 seconds...";
}

// Important: Create email headers to avoid spam folder
$headers = 'From: '.$myemail."\r\n".
    'Reply-To: '.$myemail."\r\n" .
    'X-Mailer: PHP/' . phpversion();


$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

if (!filter_var($email_address, FILTER_VALIDATE_EMAIL))
{
    $errors .= "\n Error: Invalid email address\n Redirecting to contact form in 3 seconds...";
}

if (empty($errors))
{
    $to = $myemail;
    $email_subject = "Contact form submission: $name";
    $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message";

    mail($to, $email_subject, $email_body, $headers);
    //redirect to the 'thank you' page
    header('Location: contact-form-thank-you.php');
    exit();
}
else
{
    // redirect to the contact form page after 3 seconds
    header('Refresh: 3; URL=page-3.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>
</body>
</html>
