<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$pass=$user=$err="";
if(isset($_POST['check']))
{
$cookiename="user";
$cookienamevalue=$_POST['user'];
$cookiepass="pass";
$cookiepassvalue=$_POST['pass'];
setcookie($cookiename,$cookienamevalue,time()+86400*30,"/");
setcookie($cookiepass,$cookiepassvalue,time()+86400*30,"/");
}
if(isset($_COOKIE["user"]))
{
$user=$_COOKIE["user"];
$pass=$_COOKIE["pass"];
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
include "dbcon.php";
if(isset($_POST['login']))
{
$userid=$_POST['user'];
$password=$_POST['pass'];
$password=sha1($password);
$password=crypt($userid,$password);
$cmd="Select * from reg where UserId='$userid' and Pass='$password'";
$res=mysqli_query($con,$cmd);
if(mysqli_num_rows($res)>0)
{
$row=mysqli_fetch_array($res);
session_start();
$_SESSION['id']=$row['ID'];
header("location:home.php");
}else
{
$err="either user id or password is incorrect";
}
}
?>
<body>
<form action="login.php" method="post">
<table>
<tr><th colspan="3">Please login below</th></tr>
<tr><td>User Id</td><td><input type="text" name="user" value="<?php echo $user; ?>"/></td><td><?php echo $err; ?></td></tr>
<tr><td>Password</td><td><input type="password" name="pass" value="<?php echo $pass; ?>"/></td><td><input type="checkbox" name="check" value="chk" />Remember me</td></tr>
<tr>
<td colspan="2"><input type="reset" name="Cancel" /></td><td><input type="submit" name="login" value="Log In"  /></td>
</tr>
<tr><td colspan="3">New user <a href="registration.php">Click here</a> to Register</td></tr>
</table>
</form>
</body>
</html>
