<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
if($_GET)
{
$place=$_GET['place'];
echo $place;
}
?>
<body>
<a href="post.php?trgcenter=ARTTC&place=Ranchi">Post</a>
<form action="get.php" method="get">
Place:<input type="text" name="place" />
<br  />
<input type="submit" name="GET" value="Submit" />
|</form>
</body>
</html>
