<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Email details
    $to =
    'siqedilenicolemhlongo@gmail.com'; 
    $subject = 'New Message from Contact form';
    $body = "Name: $name\n\nEmail:
    $email\n\nMessage:\n$message";

    //send email
    if(mail($to, $subject, $body))
    {
        echo "Thank you for your message! We will contact you back shortly";
    } else {
        echo "Oops!  Something went wrong. please try again later.";
    }else{
        echo "Access denied!";
    }
}
?>