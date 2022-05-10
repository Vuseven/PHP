<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>timsolonhon</title>
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
if(isset($_POST["soA"]) && isset($_POST["soB"]))
{
$soa = $_POST["soA"];
$sob = $_POST["soB"];
if($soa>$sob)
	$sl = $soa;
else
	$sl = $sob;

}
?>
<form id="form1" name="form1" method="post" action="timsolonhon.php">
  <table width="311" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC66"><span class="style1">TIM SO LON HON </span></td>
    </tr>
    <tr>
      <td width="128" bgcolor="#FFCCCC">So A: </td>
      <td width="167" bgcolor="#FFCCCC"><label>
        <input name="soA" type="text" id="soA" value="<?php echo $_POST["soA"]; ?>" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">So B: </td>
      <td bgcolor="#FFCCCC"><label>
        <input name="soB" type="text" id="soB" value="<?php echo $_POST["soB"]; ?>" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">So lon hon: </td>
      <td bgcolor="#FFCCCC"><label>
        <input name="sl" type="text" id="sl" value="<?php echo $sl; ?>" readonly ="true" style="background-color:#FFCC99" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCCCC">
        <input type="submit" name="Submit" value="Tim" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>