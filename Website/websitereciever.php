<?php
echo "Your Feedback was Recieved!";

$to = 'dicandir@kean.edu';
$subject = "Feedback from site user";
$txt = $_POST['feedback'];
$headers = "from: dicandir@eve.kean.edu" . "\r\n" . "CC: dicandir@eve.kean.edu";
mail($to,$subject,$txt,$headers);
?>
