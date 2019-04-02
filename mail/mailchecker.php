<?php
$to = "pankaj.cmarix@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: pankaj.cmarix@gmail.com" . "\r\n";


mail($to,$subject,$txt,$headers);
echo "test";
?>

