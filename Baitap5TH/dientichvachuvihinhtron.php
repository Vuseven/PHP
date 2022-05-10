<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>dien tich va chu vi hinh tron</title>
<style type="text/css">
<!--
.style1 {font-family: "Lucida Handwriting"}
-->
</style>
</head>
<body>
<?php
error_reporting(0);
if(isset($_POST["bankinh"]))
{
	$bankinh = $_POST["bankinh"];
	define ("PI", 3.14);
	$dt = PI *pow ( $bankinh,2);
	$cv = 2* PI *$bankinh;
	}
?>
<form id="form1" name="form1" method="post" action="dientichvachuvihinhtron.php">
  <table width="329" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC66"><span class="style1">DIEN TICH VA CHU VI HINH TRON </span></td>
    </tr>
    <tr>
      <td width="124" bgcolor="#FFCCCC">Ban kinh: </td>
      <td width="189" bgcolor="#FFCCCC"><label>
        <input name="bankinh" type="text" id="bankinh" value ="<?php echo $_POST["bankinh"]; ?>" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Dien tich: </td>
      <td bgcolor="#FFCCCC"><label>
        <input name="dt" type="text" id="dt" value = "<?php echo $dt;?>" readonly="true" style="background-color:magenta" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Chu vi: </td>
      <td bgcolor="#FFCCCC"><label>
        <input name="cv" type="text" id="cv" value = "<?php echo $cv;?>" readonly="true" style="background-color:magenta" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCCCC"><label>
        <input type="submit" name="Submit" value="Tinh" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
