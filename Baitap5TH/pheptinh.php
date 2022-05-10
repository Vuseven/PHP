<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phép tính trên hai số</title>
<style>
	h2{
		text-align:center;
		color: #36F;
	}
	label{
		color: red;
	}
	.c1{
		color: #900;
		text-align:right;
	}
	.c2{
		color: blue;
		text-align:right;
	}
	.c3{
		color: blue;
		text-align:right;
	}
		
</style>
</head>

<body>
<h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
<form id="form1" name="form1" method="post" action="">
  <table width="434" border="0" align="center">
    <tr>
      <td class="c1" width="136">Chọn phép tính :</td>
      <td width="69"><input type="radio" name="radio" id="radio" value="radio" />
      <label for="radio">Cộng</label></td>
      <td width="58"><input type="radio" name="radio2" id="radio2" value="radio2" />
      <label for="radio2">Trừ</label></td>
      <td width="71"><input type="radio" name="radio3" id="radio3" value="radio3" />
      <label for="radio3">Nhân</label></td>
      <td width="66"><input type="radio" name="radio4" id="radio4" value="radio4" />
      <label for="radio4">Chia</label></td>
    </tr>
    <tr>
      <td class="c2"> Số thứ nhất :</td>
      <td colspan="4"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
    </tr>
    <tr>
      <td class="c3">Số thứ nhì :</td>
      <td colspan="4"><label for="textfield2"></label>
      <input type="text" name="textfield2" id="textfield2" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Tính" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>