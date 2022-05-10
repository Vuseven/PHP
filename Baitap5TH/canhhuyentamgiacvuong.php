<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>canh huyen tam giac vuong</title>
<style type="text/css">
<!--
.style1 {
	font-family: "Lucida Handwriting";
	font-size: 18px;
}
-->
</style>
</head>

<body>
<?php
error_reporting(0);
if(isset($_POST["canhA"]) && isset($_POST["canhB"]))
{
$a = $_POST["canhA"];
$b = $_POST["canhB"];
$a2 = pow ($a,2);
$b2 = pow ($b,2);
$tong = $a2 + $b2;
$canhhuyen=sqrt ($tong);
$canhhuyen =round($canhhuyen,2);
}
?>
<form id="form1" name="form1" method="post" action="canhhuyentamgiacvuong.php">
  <table width="344" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC66"><span class="style1">CANH HUYEN TAM GIAC VUONG </span></td>
    </tr>
    <tr>
      <td width="135" bgcolor="#FFCCCC">Canh A: </td>
      <td width="193" bgcolor="#FFCCCC"><label>
        <input name="canhA" type="text" id="canhA" value="<?php echo $_POST["canhA"]; ?>"canhA"];" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Canh B: </td>
      <td bgcolor="#FFCCCC"><label>
        <input name="canhB" type="text" id="canhB" value="<?php echo $_POST["canhB"]; ?>" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Canh huyen: </td>
      <td bgcolor="#FFCCCC"><label>
        <input name="canhhuyen" type="text" id="canhhuyen" value="<?php echo $canhhuyen; ?>" readonly ="true" style="background-color:#FFCC99" />
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