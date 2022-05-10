<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giải phương trình bậc 2</title>
<style type="text/css">
<!--
.h1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.h2 input{
	margin:0px 35px;
}
.h2 input{
	color: #333333;
	background-color:#00FFFF;
}
.h2 input:hover{
	 background-color: #666666;
	 color: #FFFFFF;
}
</style>
</head>

<body>
<?php
error_reporting(0);
function giai_ptb1($a,$b)
{
	if($a == 0)
	{
		if($b == 0)
		$nghiem = "Phương trình có vô số nghiệm";
		if($b <> 0)
		$nghiem = "Phương trình vô nghiệm";
	}
	else 
	{
		$x=-$b/$a;
		$x= round ($x,2);
		$nghiem ="x= $x";
	}
		return $nghiem;
}
function giai_ptb2($a,$b,$c)
{
	if($a==0)
	{
		$nghiem = giai_ptb1($b,$c);
	}
	if($a<>0)
	{
		$delta = pow($b,2) - 4 * $a * $c;
		if($delta < 0)
			$nghiem = " Phương trình vô nghiệm" ;
		if($delta == 0)
		{
			$kep = (-$b/2 * $a);
			$nghiem = " Nghiệm kép x1 = x2 = $kep ";
		}
		if($delta > 0)
		{
			$can = sqrt($delta);
			$x1 = (-$b + $can) / ( 2 * $a);
			$x2 = (-$b - $can) / ( 2 * $a);
			$nghiem = " PT có 2 nghiệm phân biệt x1= ".round($x1,2) .", x2 = ".round($x2,2) ;
		}
	}
	return $nghiem;
}
	if(isset($_POST["a"]) && isset($_POST["b"])&& isset($_POST["c"]))
	
	{
		$a= $_POST["a"];
		$b= $_POST["b"];
		$c= $_POST["c"];
		$nghiem = giai_ptb2($a, $b, $c);
	}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="422" border="0" align="center" bgcolor="#FF99CC">
    <tr>
      <td colspan="4" align="center" bgcolor="#999999"><span class="h1">GIẢI PHƯƠNG TRÌNH BẬC 2 </span></td>
    </tr>
    <tr>
      <td width="104"><div align="left">Phương trình: </div></td>
      <td width="79" valign="top"><label>
      <input name="a" type="text" id="a" value="<?php echo $_POST["a"]; ?>" size="1" />
      x<sup>2</sup>  </label></td>
      <td width="75"><input name="b" type="text" id="b" value="<?php echo $_POST["b"]; ?>" size="1" /> 
      x  </td>
      <td width="146"><input name="c" type="text" id="c" value="<?php echo $_POST["c"]; ?>" size="1" /> = 0 </td>
    </tr>
    <tr>
      <td><div align="left">Kết quả:</div></td>
      <td colspan="3"><label>
        <input name="$nghiem" type="text" id="$nghiem" value="<?php echo $nghiem; ?>" size="35"
		readonly="true"/>
      </label></td>
    </tr>
    <tr>
      <td height="36">&nbsp;</td>
      <td colspan="3" bordercolor="#FF99CC"><label>
	  <div class="h2">
          <input type="submit" name="Submit" value="Giải phương trình" /></label></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
