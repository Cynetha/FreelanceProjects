<?php
$to = "";
$from = $_POST['inputEmail'];

$headers = "From: " . $from . "\r\n";

$subject = "New subscription";
$body = "New user subscription: " . $_POST['inputEmail'];


if( filter_var($_POST['inputEmail'], FILTER_VALIDATE_EMAIL) )
{ 
    if (mail($to, $subject, $body, $headers, "-f " . $from))
    {
        echo 'Your e-mail (' . $_POST['inputEmail'] . ') has been added to our mailing list!';
    }
    else
    {
       echo 'There was a problem with your e-mail (' . $_POST['inputEmail'] . ')';   
    }
}
else
{
   echo 'There was a problem with your e-mail (' . $_POST['inputEmail'] . ')';   
}