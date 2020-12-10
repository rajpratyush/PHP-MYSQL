<?php
$err="";
$dir="Upload/";
if(isset($_POST['upload']))
{
//$file=$_FILES['fupload'];
//var_dump($file);
if(is_uploaded_file($_FILES['fupload']['tmp_name']))
{
$fpath=$dir.$_FILES['fupload']['name'];
if(!file_exists($fpath))
{
$ftype=$_FILES['fupload']['type'];
if($ftype=="image/jpeg")
{
$fsize=$_FILES['fupload']['size'];
if($fsize<51200)
{
if(move_uploaded_file($_FILES['fupload']['tmp_name'],$fpath))
{
$err="Fileuploaded successfully";
}else
{
$err="There is an error in file uploading";
}
}
else
{
$err="File Size should be less than 50kb";
}
}
else
{
$err="Only jpg or jpeg files can be uploaded";
}
}else
{
$err="File exist, please change the file name";
}
}else
{
$err="Please choose a file to upload";
}
}
?>
