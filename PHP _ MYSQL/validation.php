<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<?php
function test_input($test)
{
$test=htmlspecialchars(stripslashes(trim($test)));
return $test;
}
$nameErr=$emailErr=$mobErr=$passErr=$cpassErr=$dobErr=$genErr="";
$name=$email=$mob=$pass=$cpass=$year=$month=$day=$gen="";
if(isset($_POST['submit']))
{
$check=1;
//$name=htmlspecialchars(stripslashes(trim($_POST['name'])));
//echo $name,"<br />";
//echo strlen(trim($name));
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
if(empty($_POST['pass']))
{
$passErr="password is blank";
$check=0;
}
else{
$pass=test_input($_POST['pass']);
if(!preg_match("/^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,20})$/",$pass))
{
$passErr="Invalid password format";
$check=0;
}
}
if(empty($_POST['cpass']))
{
$cpassErr="confirm password is blank";
$check=0;
}
else
{
$cpass=$_POST['cpass'];
if($cpass!=$pass)
{
$cpassErr="Password mismatch";
$check=0;
}
}
if($_POST['Year']=="Select")
{
$dobErr="Please select date of birth";
}
else{
$year=$_POST['Year'];
}
if($_POST['Month']=="Select")
{
$dobErr="Please select date of birth";
}
else{
$month=$_POST['Month'];
}
if($_POST['Day']=="Select")
{
$dobErr="Please select date of birth";
}
else{
$day=$_POST['Day'];
}
if(empty($_POST['gen']))
{
$genErr="Please check your gender";
}else
{
$gen=$_POST['gen'];
}


if($check==1)
{
echo "Form submitted";
}

}
?>
<body>
<form action="validation.php" method="post">
<table>
<tr>
<th colspan="3">Please fill the below Form</th></tr>
<tr><td>Name</td><td><input type="text" name="name" value="<?php echo $name; ?>" /></td><td><span><?php echo $nameErr; ?></span></td></tr>
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
<tr><td>Gender</td><td><input type="radio" name="gen" value="M" <?php echo ($gen=="M")?"checked":"";?> />Male <input type="radio" name="gen" value="F"  <?php echo ($gen=="F")?"checked":"";?> />Female</td><td><?php echo $genErr;?></td></tr>
<tr><td>Email</td><td><input type="text" name="email" value="<?php echo $email; ?>"/></td><td><?php echo $emailErr; ?></td></tr>
<tr><td>Mobile No.</td><td><input type="text" name="mob" value="<?php echo $mob; ?>" /></td><td><?php echo $mobErr; ?></td></tr>
<tr><td>Password</td><td><input type="text" name="pass" /></td><td><?php echo $passErr; ?></td></tr>
<tr><td>Confirm password</td><td><input type="password" name="cpass" /></td><td></td></tr>
<tr><td colspan="2" align="center"><input type="reset" value="Cancel" /></td><td><input type="submit" name="submit" value="Submit" /></td></tr>
</table>
</form>
</body>
</html>
