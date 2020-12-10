<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$name=$_POST['abc'];
echo $name;
if($_SERVER['REQUEST_METHOD']=="GET")
{
$name=$_REQUEST['name'];
echo $name;
}
?>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];
?>" method="get">
Name: <input type="text" name="name" /><br />
<input type="submit" name="submit" value="Submit" />

</form>
</body>
</html>
