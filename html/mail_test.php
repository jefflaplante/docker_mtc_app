<?php
    $to = "test@jefflaplante.com";
    $subject = "Thank you for contacting test";
    $message = "
    <html>
    <head>
    </head>
    <body>
    Thanks, your message was sent and our team will be in touch shortly.
    </body>
    </html>
    ";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    $headers .= 'From: <mtc@jefflaplante.com>' . "\r\n";

    mail($to,$subject,$message,$headers);
?>
