<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$ad1='<a href="http://www.bsnl.co.in"><img src="Upload/2.png" height="100px" width="100px" alt="BSNL" /></a>';
$ad2='<a href="http://www.arttc.bsnl.co.in"><img src="Upload/3.jpg" height="100px" width="100px" alt="ARTTC" /></a>';
$ad3='<a href="http://www.google.co.in"><img src="Upload/bn1.jpg" height="100px" width="100px" alt="Google" /></a>';
$test=array($ad1,$ad2,$ad3);
shuffle($test);
echo $test[0];
?>
<body>
</body>
</html>
