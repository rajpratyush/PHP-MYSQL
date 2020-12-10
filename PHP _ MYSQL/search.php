<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
include "dbcon.php";
?>
<body>
<form action="search.php" method="post">
<table>
<tr>
<td>ID</td><td><input type="text" name="id" /> </td><td><input type="submit" name="search" value="Search"  /></td>
</tr>
</table>
</form>
</body>
<?php
if(isset($_POST['search']))
{
$id=$_POST['id'];
$cmd="Select * from student_info where ID=$id";
$res=mysqli_query($con,$cmd);
if(mysqli_num_rows($res)>0)
{
$row=mysqli_fetch_array($res);
?>
<table>
<tr><th>Name</th><th>Date of Birth</th><th>Gender</th><th>Email Id</th><th>Mobile Number</th></tr>
<tr>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['DOB']; ?></td>
<td><?php echo $row['Gender']; ?></td>
<td><?php echo $row['Email']; ?></td>
<td><?php echo $row['Mobile']; ?></td>
<td><a href="update.php?id=<?php echo $row['ID']; ?>">Edit</a></td>
<td><a href="delete.php?id=<?php echo $row['ID']; ?>" onclick="return confirm('Do you want to delete')">Delete</a></td>

</tr>
</table>
<?php
}
else
{
echo "There is no record with Id=$id";
}
}
?>

</html>
