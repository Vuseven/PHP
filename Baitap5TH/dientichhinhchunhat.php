<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>dien tich hinh chu nhat</title>
<style type="text/css">
<!--
.style2 {
	font-size: 18px;
	font-family: "Lucida Handwriting";
}
-->
</style>
</head>
<body>
<?php
 	ini_set('display_errors',0);
	$dai = $_POST["dai"];
	$rong = $_POST["rong"];
	$dt= $dai*$rong;
?>
<form id="form1" name="form1" method="post" action="dientichhinhchunhat.php">
  <table width="305" border="0" align="center" bordercolor="#FFFF99">
    <tr>
      <td colspan="2" bordercolor="#FFCC66" bgcolor="#FFCC66"><span class="style2">DIEN TICH HINH CHU NHAT </span></td>
    </tr>
    <tr>
      <td width="120" bgcolor="#FFCC99">Chieu dai: </td>
      <td width="175" bgcolor="#FFCC99"><label for="dai">
       <input name="dai" type="text" id="dai" value="<?php echo $dai;?>"/></label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCC99">Chieu rong: </td>
      <td bgcolor="#FFCC99"><label for="rong">
       <input name="rong" type="text" id="rong" value="<?php echo $rong;?>"/></label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCC99">Dien tich </td>
      <td bgcolor="#FFCC99"><label for="dt">
        <input name="dt" type="text" id="dt" value="<?php echo $dt;?>"  style="background-color:violet"  readonly="true" /></label></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC99"><label>
        <input type="submit" name="btn" value="Tinh" />
      </label></td>
    </tr>
</table>
</form>
</body>
</html>
