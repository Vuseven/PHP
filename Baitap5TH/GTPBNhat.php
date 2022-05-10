<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>giai phuong trinh bac nhat</title>
</head>

<body>
        <?php
		error_reporting(0); 
if (isset($_POST['button']))
{
    $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
    $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
    if ($a == ''){
        $kq = 'Bạn chua nhập số a';
    }
    else if ($b == ''){
        $kq = 'Bạn chưa nhập số b';
    }
    else if ($a == 0){
        $kq = 'Số a phải nhập khác 0';
    }
    else {
        $kq = -($b) / $a;
    }
}
        ?>
        <form id="form1" name="form1" method="post" action="">
          <table width="374" border="0" align="center">
            <tr>
              <td colspan="3">GIẢI PHƯƠNG TRÌNH BẬC NHẤT</td>
            </tr>
            <tr>
              <td width="116">Phương trình :</td>
              <td width="112"><label for="textfield"></label>
              <input type="text" name="a" id="text" width="70px"/> x +</td>
              <td width="124"><label for="textfield2"></label>
              <input type="text" name="b" id="text" width="70px"/> = 0</td>
            </tr>
            <tr>
              <td>Nghiệm :</td>
              <td colspan="2"><label for="textfield3"></label>
              <input type="text" name="textfield3" id="textfield3" width="220px" value="<?php echo $kq;?>"/></td>
            </tr>
            <tr>
              <center><td colspan="3"><input type="submit" name="button" id="button" value="Giải phương trình" /></td></center>
            </tr>
          </table>
        </form>
        <p>&nbsp;</p>
        
</body>
</html>