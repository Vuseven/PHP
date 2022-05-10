<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ket qua thi dai hoc</title>
<style type="text/css">
<!--
.style2 {
	font-family: "Lucida Handwriting";
	font-size: 18px;
}
-->
</style>
</head>

<body>
<?php
error_reporting(0);
if(isset($_POST["toan"]) && isset($_POST["ly"]) && isset($_POST["hoa"])&& isset($_POST["diemchuan"]))
{
$toan = $_POST["toan"];
$ly = $_POST["ly"];
$hoa = $_POST["hoa"];
$diemchuan = $_POST["diemchuan"];
$tongdiem = $toan + $ly + $hoa;
if($tongdiem>=$diemchuan && $toan>0 && $ly>0 && $hoa>0)
$kq = "Dau";
else 
$kq = "rot";

}
?>
<form id="form1" name="form1" method="post" action="ketquathidaihoc.php">
  <table width="350" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#FF33CC"><span class="style2">KET QUA THI DAI HOC </span></td>
    </tr>
    <tr>
      <td width="136" bgcolor="#FFCCCC">Toan:</td>
      <td width="198" bgcolor="#FFCCCC"><label>
        <input name="toan" type="text" id="toan" value="<?php echo $_POST["toan"]; ?>" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Ly:</td>
      <td bgcolor="#FFCCCC"><label>
        <input name="ly" type="text" id="ly" value="<?php echo $_POST["ly"]; ?>" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Hoa:</td>
      <td bgcolor="#FFCCCC"><label>
        <input name="hoa" type="text" id="hoa" value="<?php echo $_POST["hoa"]; ?>" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Diem chuan: </td>
      <td bgcolor="#FFCCCC"><label>
        <input name="diemchuan" type="text" id="diemchuan" value="<?php echo $_POST["diemchuan"]; ?>" style="background-color:magenta" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Tong diem: </td>
      <td bgcolor="#FFCCCC"><label>
        <input name="tongdiem" type="text" id="tongdiem" value="<?php echo $tongdiem; ?>" readonly ="true" style="background-color:#FFCC99" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Ket qua thi: </td>
      <td bgcolor="#FFCCCC"><label>
        <input name="kq" type="text" id="kq" value="<?php echo $kq; ?>" readonly ="true" style="background-color:#FFCC99"/>
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