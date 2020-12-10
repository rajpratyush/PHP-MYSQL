<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="batch2";
$con=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_errno())
{
die("connection failed" . mysqli_connect_error());
}
?>
