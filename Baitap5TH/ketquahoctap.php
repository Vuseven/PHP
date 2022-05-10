<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ket qua hoc tap</title>
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
if(isset($_POST["HK1"]) && isset($_POST["HK2"]))
{
$HK1 = $_POST["HK1"];
$HK2 = $_POST["HK2"];
$DTB = ( $HK1 + $HK2 * 2)/3;
$DTB = round($DTB,2);
if($DTB>=5)
	$kq = "Duoc len lop";
else
	$kq = "o lai lop";
if($DTB>=8)
	$xl = "Gioi";
elseif($DTB>=6.5 && $DTB <8)
	$xl = "kha";
elseif($DTB>=5 && $DTB <6.5)
	$xl = "trung binh";
else
	$xl = "yeu";
	}
?>
<form id="form1" name="form1" method="post" action="ketquahoctap.php">
  <table width="337" border="0" align="center">
    <tr>
      <td height="47" colspan="2" align="center" bgcolor="#FF33CC"><span class="style1">KET QUA HOC TAP </span></td>
    </tr>
    <tr>
      <td width="128" height="31" bgcolor="#FFCCCC">Diem HK1: </td>
      <td width="199" align="left" bgcolor="#FFCCCC"><label>
        <input name="HK1" type="text" id="HK1" value="<?php echo $_POST["HK1"];?>" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Diem HK2: </td>
      <td bgcolor="#FFCCCC"><label>
        <input name="HK2" type="text" id="HK2" value="<?php echo $_POST["HK2"];?>" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Diem trung binh: </td>
      <td bgcolor="#FFCCCC"><label>
        <input name="dtb" type="text" id="dtb" value="<?php echo $DTB;?>" readonly ="true" style="background-color:#FFCC99"/>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Ket qua: </td>
      <td bgcolor="#FFCCCC"><label>
        <input name="kq" type="text" id="kq" value="<?php echo $kq;?>" readonly ="true"  style="background-color:#FFCC99"/>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Xep loai hoc luc: </td>
      <td bgcolor="#FFCCCC"><label>
        <input name="xl" type="text" id="xl" value="<?php echo $xl;?>"readonly ="true" style="background-color:#FFCC99" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCCCC"><label>
        <input type="submit" name="Submit" value="Xem ket qua" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
