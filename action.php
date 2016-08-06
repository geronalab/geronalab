<?php
$to = "assansanogo@etu.udamail.fr";
$subject = "Comment";
$email = "blabla";
$message = "blabla";
$headers = "From: $email";
mail($to, $subject, $message, $headers);
?>