<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>thanh toan tien dien</title>
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
if(isset($_POST["name"]) && isset($_POST["so_cu"]) && isset($_POST["so_moi"]))
{
$so_cu = $_POST["so_cu"];
$so_moi = $_POST["so_moi"];
$dg = $_POST["dg"];
$thanhtien = ($so_moi - $so_cu) * $dg;
}
?>
<form id="form1" name="form1" method="post" action="thanhtoantiendien.php">
  <table width="345" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC66"><span class="style1">THANH TOAN TIEN DIEN </span></td>
    </tr>
    <tr>
      <td width="125" bgcolor="#FFCCCC"><label>Ten chu ho: </label></td>
      <td width="194" bgcolor="#FFCCCC"><label>
        <input name="name" type="text" id="name" Value ="<?php echo $_POST["name"]?>" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC"><label>Chi so cu: </label></td>
      <td bgcolor="#FFCCCC"><label>
        <input type="text" name="so_cu" value ="<?php echo $_POST["so_cu"];?>"/>
        (Kw)
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC"><label>Chi so moi: </label></td>
      <td bgcolor="#FFCCCC"><label>
        <input type="text" name="so_moi" value ="<?php echo $_POST["so_moi"];?>" />
      (Kw)</label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC"><label>Don gia</label>
        :</td>
      <td bgcolor="#FFCCCC"><label>
        <input type="text" name="dg" value ="2000" />
      (VND)</label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC"><label>So tien thanh toan: </label></td>
      <td bgcolor="#FFCCCC"><label>
        <input type="text" name="so_tien" value ="<?php echo $thanhtien;?>" readonly="true" style="background-color:magenta"/>
      (VND)</label></td>
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