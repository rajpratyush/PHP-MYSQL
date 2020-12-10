<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
echo "Hello Students, Welcome to ARTTC, Ranchi";
$name=array("BSNL","ARTTC","Ranchi");
//echo $name[0];
//echo count($name);
$person=array(array("ARTTC","PHP","RC","Ranchi"),array("BSNL","ASP","NIT","Jamshepur"),array("RAM","DCN","BIT","Dhanbad"));
//echo $person[0][0];
//echo count($person[0]);
$row=count($person);
$column=count($person[0]);
?>
<table border="1" style="border-collapse:collapse">
<tr>
<th>Name</th><th>Course</th><th>College</th><th>Place</th>
</tr>
<?php
for($i=0;$i<$row;$i++)
{?>
<tr>
<?php
for($j=0;$j<$column;$j++)
{
echo "<td>".$person[$i][$j]."</td>";
}
?>
</tr>
<?php
}
?>
</table>
</body>
</html>
