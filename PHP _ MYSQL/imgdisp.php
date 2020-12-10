<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include "dbcon.php";
?>
<form action="imgdisp.php" method="post">
<table>
<tr>
<td>ID</td><td><input type="text" name="id" /></td><td><input type="submit" name="search" value="Search" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['search']))
{
$id=$_POST['id'];
$cmd= "Select * from app where Id=$id";
$res=mysqli_query($con,$cmd);
if(mysqli_num_rows($res)>0)
{
$row=mysqli_fetch_array($res);
$name=$row['Name'];
$dob=$row['DOB'];
$gen=$row['Gender'];
$email=$row['Email'];
$mob=$row['Mobile'];
$img=$row['Img'];
?>
<table border="1" style="border-collapse:collapse">
<tr><td>Name</td><td><?php echo $name; ?></td><td rowspan="4"><img src="<?php echo $img; ?>" width="100px" height="100px"  /></td></tr>
<tr><td>Date of Birth</td><td><?php echo $dob; ?></td></tr>
<tr><td>Gender</td><td><?php echo $gen; ?></td></tr>
<tr><td>Email Id</td><td><?php echo $email; ?></td></tr>
<tr><td>Mobile Number</td><td colspan="2"><?php echo $mob; ?></td></tr>
</table>
<?php
}
else
{
echo "There is no record with ID =$id";
}

}
?>
</body>
</html>
