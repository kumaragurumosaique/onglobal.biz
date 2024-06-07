<?php  
 
    if(isset($_POST['submit'])) {

    $mailto = "revathi@mosaique.link";  //My email address


    //Getting customer data
    $name = $_POST['block-contactform-name']; //getting customer name
    $fromEmail = $_POST['block-contactform-email']; //getting customer email
    $subject = $_POST['block-contactform-message']; //getting subject line from client
    
    //Email body I will receive
    $message = "Customer Name: " . $name . "\n". "Message: " . "\n" . $_POST['message'];
    

    //Email headers
    $headers = "From: " . $fromEmail; // Client email, I will receive
    

    //PHP mailer function
    
    $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
    }
 
?>