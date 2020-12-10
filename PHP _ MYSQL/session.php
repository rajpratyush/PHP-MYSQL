<?php
include "dbcon.php";
session_start();
$id=$_SESSION['id'];
$cmd="Select * from reg where ID=$id";
$res=mysqli_query($con,$cmd);
if(mysqli_num_rows($res)>0)
{
$row=mysqli_fetch_array($res);
$name=$row['Name'];
}
else
{
header("location:login.php");
}
?>
