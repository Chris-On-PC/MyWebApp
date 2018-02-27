<?php
 
    $to = "chrisviviers1@gmail.com"; 
    $from = $_REQUEST['email']; 
    $name = $_REQUEST['name']; 
    $headers = "From: $from"; 
    $subject = "You have a message sent from your site"; 
 
    $fields = array(); 
    $fields{"name"} = "name"; 
    $fields{"email"} = "email"; 
    $fields{"message"} = "message";
 
    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
 
    //$send = mail($to, $subject, $body, $headers);

    if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $headers)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
 
?>

