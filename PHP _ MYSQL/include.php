<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$x=$d="";
function num($num,$disp)
{ $z="";
if(empty($disp))
	{
	$z=$num;
	}
	else
	{  if(!preg_match("#[=]+#",$disp))
		{		$z=$disp;
				$z .= $num;
				
		}
		else
		{
			$z=$num;
			
		}	
	}	return $z;
	
}

if(isset($_POST['submit']))
{
  switch($_POST['submit'])
  {
  	case '1' :
	$x=num($_POST['submit'],$_POST['display']);
	
	/*if(empty($_POST['display']))
	{
	$x=1;
	}
	else
	{  if(!preg_match("#[=]+#", $_POST['display']))
		{		$x=$_POST['display'];
				$x.='1';
		}
		else
		{
			$x=1;
		}	
	}
	*/
	break;
	
	
	case '2' :
	$x=num($_POST['submit'],$_POST['display']);
	/*if(empty($_POST['display']))
	{
	$x=2;
	}
	else
	{if(!preg_match("#[=]+#", $_POST['display']))
		{		$x=$_POST['display'];
				$x.='2';
		}
		else
		{
			$x=2;
		}	;	
	}*/
	break;
	
	case '3' :
	$x=num($_POST['submit'],$_POST['display']);
	/*if(empty($_POST['display']))
	{
	$x=3;
	}
	else
	{if(!preg_match("#[=]+#", $_POST['display']))
		{		$x=$_POST['display'];
				$x.='3';
		}
		else
		{
			$x=3;
		}		
	}*/
	break;
	
	case '4' :
	$x=num($_POST['submit'],$_POST['display']);
	/*if(empty($_POST['display']))
	{
	$x=4;
	}
	else
	{if(!preg_match("#[=]+#", $_POST['display']))
		{		$x=$_POST['display'];
				$x.='4';
		}
		else
		{
			$x=4;
		}	
	}*/
	break;
	
	
	case '5' :
	$x=num($_POST['submit'],$_POST['display']);
	/*if(empty($_POST['display']))
	{
	$x=5;
	}
	else
	{if(!preg_match("#[=]+#", $_POST['display']))
		{		$x=$_POST['display'];
				$x.='5';
		}
		else
		{
			$x=5;
		}		
	}*/
	break;
	
	case '6' :
	$x=num($_POST['submit'],$_POST['display']);
	/*if(empty($_POST['display']))
	{
	$x=6;
	}
	else
	{if(!preg_match("#[=]+#", $_POST['display']))
		{		$x=$_POST['display'];
				$x.='6';
		}
		else
		{
			$x=6;
		}	
	}*/
	break;
	
	case '7' :
	$x=num($_POST['submit'],$_POST['display']);
	/*if(empty($_POST['display']))
	{
	$x=7;
	}
	else
	{if(!preg_match("#[=]+#", $_POST['display']))
		{		$x=$_POST['display'];
				$x.='7';
		}
		else
		{
			$x=7;
		}	
	}
	*/
	break;
	
	case '8' :
	$x=num($_POST['submit'],$_POST['display']);
	/*if(empty($_POST['display']))
	{
	$x=8;
	}
	else
	{if(!preg_match("#[=]+#", $_POST['display']))
		{		$x=$_POST['display'];
				$x.='8';
		}
		else
		{
			$x=8;
		}	
	}
	*/break;
	
	case '9' :
	$x=num($_POST['submit'],$_POST['display']);
	/*if(empty($_POST['display']))
	{
	$x=9;
	}
	else
	{if(!preg_match("/^.*[=].*$/", $_POST['display']))
		{		$x=$_POST['display'];
				$x.='9';
		}
		else
		{
			$x=9;
		}	
	}
	*/break;
	
	case '0' :
	$x=num($_POST['submit'],$_POST['display']);
	/*if(empty($_POST['display']))
	{
	$x=0;
	}
	else
	{if(!preg_match("#[=]+#", $_POST['display']))
		{		$x=$_POST['display'];
				$x.='0';
		}
		else
		{
			$x=0;
		}	
	}
	*/break;
	
	case '.' :
	if(empty($_POST['display']))
	{
	$x='0.';
	}
	else
	{
	if(!preg_match("#[.]+#", $_POST['display']))
		{		$x=$_POST['display'];
				$x.='.';
		}
		else
		{
		$pos_dot=strrpos($_POST['display'],".");
		$pos_plus=strrpos($_POST['display'],"+");
		$pos_minus=strrpos($_POST['display'],"-");
		$pos_prod=strrpos($_POST['display'],"*");
		$pos_div=strrpos($_POST['display'],"/");
		
		if($pos_plus>$pos_dot||$pos_minus>$pos_dot||$pos_prod>$pos_dot||$pos_div>$pos_dot)
		  {
		  	$x=$_POST['display'];
			$x .=".";
		  }
		
		else
		{
			$x=$_POST['display'];
		}	
		}
	   }
	break;
	
	case '+' :
	if(empty($_POST['display']))
	{
	$x="";
	}
	else
	{ if(!preg_match("#[=]+#",$_POST['display']))
	  {
	   if(!preg_match("/^.+[\+\-\*\/]+$/",$_POST['display']))
		{
		$x=$_POST['display'];
		$x.='+';	
		}
		else
		{
		//$x=$_POST['display'];
		$x=substr($_POST['display'],0,-1);
		$x .='+';
		}
	  }
	  else
	   {
		$x="";
	   }
	}
	break;
	
	case '-' :
	if(empty($_POST['display']))
	{
	$x="";
	}
	else
	{ if(!preg_match("#[=]+#",$_POST['display']))
	  {
	   if(!preg_match("/^.+[\+\-\*\/]+$/",$_POST['display']))
		{
		$x=$_POST['display'];
		$x.='-';	
		}
		else
		{
		//$x=$_POST['display'];
		$x=substr($_POST['display'],0,-1);
		$x .='-';
		}
	  }
	  else
	   {
		$x="";
	   }
	}
	break;
	
	case '*' :
	if(empty($_POST['display']))
	{
	$x="";
	}
	else
	{ if(!preg_match("#[=]+#",$_POST['display']))
	  {
	   if(!preg_match("/^.+[\+\-\*\/]+$/",$_POST['display']))
		{
		$x=$_POST['display'];
		$x.='*';	
		}
		else
		{
		//$x=$_POST['display'];
		$x=substr($_POST['display'],0,-1);
		$x .='*';
		}
	  }
	  else
	   {
		$x="";
	   }
	}break;
	
	case '/' :
	if(empty($_POST['display']))
	{
	$x="";
	}
	else
	{ if(!preg_match("#[=]+#",$_POST['display']))
	  {
	   if(!preg_match("/^.+[\+\-\*\/]+$/",$_POST['display']))
		{
		$x=$_POST['display'];
		$x.='/';	
		}
		else
		{
		//$x=$_POST['display'];
		$x=substr($_POST['display'],0,-1);
		$x .='/';
		}
	  }
	  else
	   {
		$x="";
	   }
	}break;
	
	case '=' :
	if(empty($_POST['display']))
	{
	$x="";
	}
	else
	{ if(!preg_match("/^.+[\+\-\*\/]+$/",$_POST['display']))
		{
		$x=$_POST['display'];
		$r=$x;
		$x.='=';	
		$p = eval('return ' .$r.';');
		//$x=$p;
		$x .=$p;
		$d = 'disabled="disabled"';
		}
		else
		{ 
		$x=$_POST['display'];
		}
	}
	break;
	
	case 'C' :
	if(empty($_POST['display']))
	{
	$x="";
	}
	else
	{
		$d="";
		$x="";
			
	}
	break;
  }

}

?>

</body>
</html>
