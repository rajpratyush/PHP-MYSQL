<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include "dbcon.php";
if($_GET)
{
$id=$_GET['id'];
$cmd="select * from student_info where ID=$id";
$res=mysqli_query($con,$cmd);
if(mysqli_num_rows($res)>0)
{
$row=mysqli_fetch_array($res);
$name=$row['Name'];
$dob=$row['DOB'];
$year=substr($dob,0,-6);
$month=substr($dob,5,-3);
$day=substr($dob,8);
$gen=$row['Gender'];
$email=$row['Email'];
$mob=$row['Mobile'];
//echo $year,"<br />",$month,"<br />",$day;
?>
<form action="update.php" method="post">
<table>
<tr>
<th colspan="3">Please edit below</th>
</tr>
<tr><td colspan="3"><input type="hidden" name="id" value="<?php echo $id;?>"  /></td></tr>
<tr><td>Name</td><td><input type="text" name="name" value="<?php echo $name; ?>"  /></td><td></td></tr>
<tr><td>DOB</td><td>Year:<select name="Year">
<option value="Select">Select</option>
<!--<option value="2000" selected>2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>-->
<?php
for($i=1995;$i<2005;$i++)
{
if($year==$i)
{
echo '<option value="'.$i.'" selected>'.$i.'</option>';
}
else{
echo '<option value="'.$i.'">'.$i.'</option>';
}
}
?>
</select>
Month:<select name="Month">
<option value="Select">Select</option>
<!--<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>-->
<?php
for($i=01;$i<13;$i++)
{
if($month==$i)
{
echo '<option value="'.$i.'" selected>'.$i.'</option>';
}
else{
echo '<option value="'.$i.'">'.$i.'</option>';
}
}
?>
</select>
Day: <select name="Day">
<option value="Select">Select</option>
<!--<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>-->
<?php
for($i=01;$i<32;$i++)
{
if($day==$i)
{
echo '<option value="'.$i.'" selected>'.$i.'</option>';
}
else{
echo '<option value="'.$i.'">'.$i.'</option>';
}
}
?>
</select></td><td></td></tr>
<tr><td>Gender</td><td><input type="radio" name="gen" value="M" <?php echo ($gen=="M")?"checked":"";?> />Male <input type="radio" name="gen" value="F"  <?php echo ($gen=="F")?"checked":"";?> />Female</td><td></td></tr>
<tr><td>E-Mail</td><td><input type="text" name="email" value="<?php echo $email;?>"  /></td><td></td></tr>
<tr><td>Mobile</td><td><input type="text" name="mob" value="<?php echo $mob;?>"  /></td><td></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="update" value="Update"  /></td><td><input type="reset" value="Cancel"  /></td></tr>
</table>
</form>
<?php
}
else
{
echo "There is no record with ID=$id";
}
}
?>
<?php
if(isset($_POST['update']))
{
function test_input($test)
{
$test=htmlspecialchars(stripslashes(trim($test)));
return $test;
}
$id=$_POST['id'];
//$name=$_POST['name'];
$check=1;
if(empty($_POST['name']))
{
$nameErr="Name is blank";
$check=0;
}
else{
$name=test_input($_POST['name']);
if(!preg_match("/^[A-Za-z ]+$/",$name))
{
$nameErr="Only alphabets or space is allowed";
$check=0;
}
}
$year=$_POST['Year'];
$month=$_POST['Month'];
$day=$_POST['Day'];
$dob=$year."-".$month."-".$day;
$gen=$_POST['gen'];
//$email=$_POST['email'];
if(empty($_POST['email']))
{
$emailErr="Email is blank";
$check=0;
}
else{
$email=test_input($_POST['email']);
//if(!preg_match("/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/",$email))
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
$emailErr="Invalid E-mail Id";
$check=0;
}
}
//$mob=$_POST['mob'];
if(empty($_POST['mob']))
{
$mobErr="Mobile Number is blank";
$check=0;
}
else{
$mob=test_input($_POST['mob']);
if(!preg_match("/^\d{10}$/",$mob))
{
$mobErr="Invalid mobile number";
$check=0;
}
}
if($check==1)
{
//$cmd="update student_info set Name='$name', Gender='$gen', DOB='$dob', Email='$email', Mobile='$mob' where ID=$id";
$cmd="update student_info set Name=?, Gender=?, DOB=?, Email=?, Mobile=? where ID=$id";
$stmt=mysqli_prepare($con,$cmd);
mysqli_stmt_bind_param($stmt,'ssssd',$name,$gen,$dob,$email,$mob);
if(mysqli_stmt_execute($stmt))
//if(mysqli_query($con,$cmd))
{
echo 'data updated <a href="search.php">Click here to go to search page</a>';
}
}
else
{
?>
<form action="update.php" method="post">
<table>
<tr>
<th colspan="3">Please edit below</th>
</tr>
<tr><td colspan="3"><input type="hidden" name="id" value="<?php echo $id;?>"  /></td></tr>
<tr><td>Name</td><td><input type="text" name="name" value="<?php echo $name; ?>"  /></td><td><?php echo $nameErr; ?></td></tr>
<tr><td>DOB</td><td>Year:<select name="Year">
<option value="Select">Select</option>
<!--<option value="2000" selected>2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>-->
<?php
for($i=1995;$i<2005;$i++)
{
if($year==$i)
{
echo '<option value="'.$i.'" selected>'.$i.'</option>';
}
else{
echo '<option value="'.$i.'">'.$i.'</option>';
}
}
?>
</select>
Month:<select name="Month">
<option value="Select">Select</option>
<!--<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>-->
<?php
for($i=01;$i<13;$i++)
{
if($month==$i)
{
echo '<option value="'.$i.'" selected>'.$i.'</option>';
}
else{
echo '<option value="'.$i.'">'.$i.'</option>';
}
}
?>
</select>
Day: <select name="Day">
<option value="Select">Select</option>
<!--<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>-->
<?php
for($i=01;$i<32;$i++)
{
if($day==$i)
{
echo '<option value="'.$i.'" selected>'.$i.'</option>';
}
else{
echo '<option value="'.$i.'">'.$i.'</option>';
}
}
?>
</select></td><td></td></tr>
<tr><td>Gender</td><td><input type="radio" name="gen" value="M" <?php echo ($gen=="M")?"checked":"";?> />Male <input type="radio" name="gen" value="F"  <?php echo ($gen=="F")?"checked":"";?> />Female</td><td></td></tr>
<tr><td>E-Mail</td><td><input type="text" name="email" value="<?php echo $email;?>"  /></td><td></td></tr>
<tr><td>Mobile</td><td><input type="text" name="mob" value="<?php echo $mob;?>"  /></td><td></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="update" value="Update"  /></td><td><input type="reset" value="Cancel"  /></td></tr>
</table>
</form>
<?php
}
}
?>
</body>
</html>
