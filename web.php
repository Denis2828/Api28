<?php
$url = "https://api.telegram.org/bot"."1095975227:AAHresejfvqEcWBpqiGtd91elk4jUVBP-H0"."/setWebhook?url=https://blooming-refuge-48999.herokuapp.com/bot.php";
$l1=file_get_contents($url);
$response = json_decode($l1);
$s=print_r($response);
echo $s;
?>