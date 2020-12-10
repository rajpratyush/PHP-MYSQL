<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
class rectangle
{
public $length;
public $width;
function getPerimeter()
{
return (2*($this->length+$this->width));
}
}
$obj=new rectangle();
$obj->length=10;
$obj->width=20;
echo "Perimeter of the rectangle is " .$obj->getPerimeter();

$colors=array("Red","Blue","Yellow","Green");
foreach($colors as $color)
{
switch($color)
{
case "Blue":
echo "My Favourite color is " . $color."<br />";
break;
default:
echo $color ."<br />";
}
}
foreach($_SERVER as $x=>$y)
{
echo "Key is <b> $x </b> and the value is <b> $y</b> <br>";
}

?>
</body>
</html>
