<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include "dbcon.php";
$cmd="select * from student_info";
$res=mysqli_query($con,$cmd);
if(mysqli_num_rows($res)>0)
{
?>
<table border="1" style="border-collapse:collapse">
<tr><th>ID</th><th>Name</th><th>Date of Birth</th><th>Gender</th><th>Email Id</th><th>Mobile Number</th></tr>
<?php
while($row=mysqli_fetch_array($res))
{
echo '<tr>
<td>'.$row['ID'].'</td>
<td>'.$row['Name'].'</td>
<td>'.$row['DOB'].'</td>
<td>'.$row['Gender'].'</td>
<td>'.$row['Email'].'</td>
<td>'.$row['Mobile'].'</td>
</tr>';
}
?>
</table>
<?php
}
?>
</body>
</html>
