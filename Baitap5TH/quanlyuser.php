<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý user</title></head>
<body>
    <?php
    $link = mysqli_connect("localhost", "root", "");
    $link -> select_db("ql_ban_sua");
    // mysqli_select_db("ql_ban_sua"); // (Lưu ý tên cơ sở dữ liệu buổi 4)
    $str_select = "select * from user";
    // mysqli_query("SET NAMES 'UTF8'");
    $result = mysqli_query($link, $str_select, MYSQLI_USE_RESULT);
    echo "<div align='center'> <H1> DANH SÁCH USER </H1> </div>";
    echo "<table border = 1 align= 'center' >";
    echo "<tr>";
	echo "<th>STT</th>";
    echo "<th>Username</th>";
    echo "<th>Password</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr>";
        echo "<th>" . $row[0] . "</th>";
        echo "<th>" . $row[1] . "</th>";
		echo "<th>" . $row[2] . "</th>";
		echo "</tr>";
    }
    echo "</table";
    mysqli_close($link); ?> 
    </body>
</html>