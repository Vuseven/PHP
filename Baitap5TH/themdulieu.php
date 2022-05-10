<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm dữ liệu vào cơ sở dữ liệu vào table</title>
</head>

<body>
<?php
	$conn = mysqli_connect("localhost", "root", "", "ql_ban_sua");
	if (!$conn) {
 	die('Không thể kết nối: ' . mysqli_error($conn));
 	exit();
	}
	$sql = 'INSERT INTO khach_hang '.
 '(Ma_khach_hang,Ten_khach_hang,Phai,Dia_chi,Dien_Thoai,Email) '.
'VALUES ( "KH002","NGUYỄN VĂN VĂN","Nam","BẠC 
LIÊU","0909999888","VANVAN@GMAIL.COM")';
'INSERT INTO khach_hang '.
 '(Ma_khach_hang,Ten_khach_hang,Phai,Dia_chi,Dien_Thoai,Email) '.
 'VALUES ( "KH003","NGUYỄN VĂN TOÀN","Nam","BẠC 
LIÊU","0909999777","VANTOAN@GMAIL.COM")';
'INSERT INTO khach_hang '.
 '(Ma_khach_hang,Ten_khach_hang,Phai,Dia_chi,Dien_Thoai,Email) '.
 'VALUES ( "KH004","NGUYỄN VĂN THANH","Nam","BẠC 
LIÊU","0909999666","VANTHANH@GMAIL.COM")';
//mysql_select_db(' QL_BAN_SUA ');
//mysql_query("SET NAMES 'utf8'");
	$ret = mysqli_query($conn,$sql);
	if (!$ret) {
 	die('Không thể thêm dữ liệu: ' . mysqli_error($conn));
	}
	echo "Thêm dữ liệu thành công\n";
	mysqli_close($conn);
?>
</body>
</html>