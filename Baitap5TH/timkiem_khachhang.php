<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>VD1-DANH SÁCH KHÁCH HÀNG</title>
</head>

<body>
    <?php
    $link = mysqli_connect("localhost", "root", "");
    $link -> select_db("ql_ban_sua");
    // mysqli_select_db("ql_ban_sua"); // (Lưu ý tên cơ sở dữ liệu buổi 4)
    $str_select = "select * from khach_hang";
    // mysqli_query("SET NAMES 'UTF8'");
    $result = mysqli_query($link, $str_select, MYSQLI_USE_RESULT);
    echo "<div align='center'> <H1> DANH SÁCH KHÁCH HÀNG </H1> </div>";
    echo "<table border = 1 align= 'center' >";
    echo "<tr>";
    echo "<th> MÃ KHÁCH HÀNG </th>";
    echo "<th> TÊN KHÁCH HÀNG </th>";
    echo "<th> GIỚI TÍNH </th>";
    echo "<th> ĐỊA CHỈ </th>";
    echo "<th> ĐIỆN THOẠI </th>";
    echo "<th> EMAIL </th>";
    echo "</tr>";
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr>";
        echo "<th>" . $row[0] . "</th>";
        echo "<th>" . $row[1] . "</th>";
        echo "<th>" . $row[2] . "</th>";
        echo "<th>" . $row[3] . "</th>";
        echo "<th>" . $row[4] . "</th>";
        echo "<th>" . $row[5] . "</th>";
        echo "</tr>";
    }
    echo "</table";
    mysqli_close($link); ?> 
    </body>

</html>