<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_GET))
{
$file=$_GET['file'];
$filepath="Upload/".$file;
if(file_exists($filepath)) {
        header('Content-Description: File Transfer');
        //header('Content-Type: application/octet-stream');
		header('Content-Type:'. mime_content_type($filepath));
        header('Content-Disposition: inline; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); // Flush system output buffer
		ob_clean();
        readfile($filepath);
        exit;
    }
}
?>
</body>
</html>
