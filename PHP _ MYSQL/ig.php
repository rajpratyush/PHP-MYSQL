<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
img{
padding:5px;
}
</style>
</head>

<body>
<?php
include "fupload.php";
?>
<!--<a href="fupload.php"><img src="Upload/x.png" height="100px" width="100px" alt="x" /></a>-->
<?php
$dir="Upload/";
if(is_dir($dir))
{
if($dh=opendir($dir))
{
while(($file=readdir($dh))!==false)
{
if($file!="."&&$file!="..")
{
//echo $file,"<br />";
echo '<a href="disp.php?imageurl='.$file.'"><img src="'.$dir.$file.'" height="100px" width="100px" alt="'.$file.'" /></a>';
}
}
closedir($dh);
}
}
?>
</body>
</html>
