<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "MOSAIQUE Web";

    $email_subject = "Visitor contact info";

    $email_body = "User name: $name.\n".
                    "User : $visitor_email.\n".
                    "User message: $message.\n";

    $to = "revathi@mosaique.link";

    $headers = "From: $email_from";

    $headers .= "Reply-to: $visitor_email";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>