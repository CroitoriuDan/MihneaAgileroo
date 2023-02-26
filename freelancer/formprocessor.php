<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];

if(empty($name) || empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}


$email_from = $visitor_email;
$email_subject = "New request from $name";
$email_body = "You have received a new message from the user $name. \n".
"email adress: $visitor_email\n".
"Here is the message: \n $message \n". 
"The telephone number of the client is $phone";

$to = "mmihnea17@gmail.com";
$headers = "From: $email_from \r\n";
mail($to,$email_subject,$email_body,$headers);


echo '<a href ="https://portofoliu-mihnea.000webhostapp.com/" style="text-decoration: none; font-size: 500%;">Go back to the main page</a>';

?>