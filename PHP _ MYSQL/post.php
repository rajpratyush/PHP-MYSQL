<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
if($_GET)
{
$trgcenter=$_GET['trgcenter'];
$place=$_GET['place'];
echo "Welcome to $trgcenter at $place";
}
if($_SERVER['REQUEST_METHOD']=="POST")
{
if(empty($_POST['name']))
{
echo "Name is blank";
}else
{
$name=$_POST['name'];
echo $name;
}
}
?>
<body>
<form action="request.php" method="post">
Name: <input type="text" name="abc" /><br />
<input type="submit" name="submit" value="Submit" />

</form>
</body>
</html>
