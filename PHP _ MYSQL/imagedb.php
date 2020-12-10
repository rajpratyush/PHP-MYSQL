<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">
function preview(event)
{
var reader=new FileReader();
reader.onload=function()
{
var output= document.getElementById('output_image');
output.src=reader.result;
}
reader.readAsDataURL(event.target.files[0]);
}
</script>
</head>
<?php
include "dbcon.php";
$name=$year=$month=$day=$email=$gen=$mob="";
if(isset($_POST['insert']))
{
$name=$_POST['name'];
$year=$_POST['Year'];
$month=$_POST['Month'];
$day=$_POST['Day'];
$dob=$year."-".$month."-".$day;
$gen=$_POST['gen'];
$email=$_POST['email'];
$mob=$_POST['mob'];
if(is_uploaded_file($_FILES['file']['tmp_name']))

{
$file=file_get_contents($_FILES['file']['tmp_name']);
$img=base64_encode($file);
$filetype=$_FILES['file']['type'];
$img="data:$filetype;base64,$img";
$cmd="insert into app (Name,DOB,Gender,Email,Mobile,Img) values('$name','$dob','$gen','$email','$mob','$img')";
if(mysqli_query($con,$cmd))
{
$id=mysqli_insert_id($con);
echo "Registration successful and your registration id is $id";
}
else
{
echo "error $cmd";
}
}
else
{
echo "please choose your image";
}
}
?>
<body>
<form action="imagedb.php" method="post" enctype="multipart/form-data">
<table>
<tr><th colspan="3">Please fill the details below</th></tr>
<tr>
<td>Name</td><td><input type="text" name="name" value="<?php echo $name;?>"  /></td><td></td>
</tr>
<tr>
<td>DOB</td><td>Year:<select name="Year">
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
</select></td><td></td>
</tr>
<tr>
<td>Gender</td><td><input type="radio" name="gen" value="M" <?php echo ($gen=="M")?"checked":"";?> />Male <input type="radio" name="gen" value="F"  <?php echo ($gen=="F")?"checked":"";?> />Female</td><td></td>
</tr>
<tr>
<td>Email Id</td><td><input type="text" name="email" value="<?php echo $email; ?>"/></td><td></td>
</tr>
<tr>
<td>Mobile Number</td><td><input type="text" name="mob" value="<?php echo $mob; ?>" /></td><td></td>
</tr>
<tr>
<tr>
<td>Upload Image</td><td><input type="file" name="file" onchange="preview(event)" /></td><td width="100px" height="100px"><img id="output_image" width="100%" /></td>
</tr>
<td colspan="2"><input type="submit" name="insert" value="Submit"  /></td><td> <input type="reset" value="Cancel"  /></td>
</tr>
</table>
</form>
</body>
</html>
