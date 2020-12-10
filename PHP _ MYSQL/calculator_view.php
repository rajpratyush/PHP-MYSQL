<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php include('include.php');
?>

<form method="post">
<center><h1 class="text">This is my Calculator ! </h1></center>
<div id="cal">
<br />
<input type="text" class="txt" readonly="yes" name="display" value="
<?php echo $x;?>" />
<br /><br />
<input type="submit" class="btn" name="submit" value="1"/>
<input type="submit" class="btn" name="submit" value="2"/>
<input type="submit" class="btn" name="submit" value="3"/>
<input type="submit" class="btn" name="submit" value="4"/>
<input type="submit" class="btn" name="submit" value="5"/><br />

<input type="submit" class="btn" name="submit" value="6"/>
<input type="submit" class="btn" name="submit" value="7"/>
<input type="submit" class="btn" name="submit" value="8"/>
<input type="submit" class="btn" name="submit" value="9"/>
<input type="submit" class="btn" name="submit" value="0"/>
<input type="submit" class="btn" name="submit" value="."/><br />

<input type="submit" class="btn" name="submit" value="+"/>
<input type="submit" class="btn" name="submit" value="-"/>
<input type="submit" class="btn" name="submit" value="*"/>
<input type="submit" class="btn" name="submit" value="/"/>
<input type="submit" class="btn" name="submit" value="=" <?php echo $d;?>/>

<input type="submit" class="btn" name="submit" value="C"/><br /></div>

</form>


</body>
</html>
