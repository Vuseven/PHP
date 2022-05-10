<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="" >
     Số a : <input type="text" name="soa" value=""><br><br>
     Số b : <input type="text" name="sob" value=""><br><br>
     <input type = "submit" value="+" name="btnSm">&nbsp;
     <input type = "submit" value="-" name="btnSm">&nbsp;
     <input type = "submit" value="*" name="btnSm">&nbsp;
     <input type = "submit" value="/" name="btnSm">&nbsp;
     <input type = "submit" value="%" name="btnSm">	
</form>
<?php
function pheptinh($pt, $a, $b){
	if($pt=='+'){
    	return $a + $b;
       } else if($pt=='-'){
       	return $a - $b;
        } else if($pt=='*'){
        return $a * $b;
		} else if($pt=='%'){
		return $a % $b;
       } else if($pt=='/'){
       if($b!=0){
       return $a / $b;
       }else{
       echo "Khong the chia cho 0";
       }
}
}
	if(isset($_POST['btnSm'])){
	$a = $_POST['soa'];
	$b = $_POST['sob'];
	$pt = $_POST['btnSm'];
	if($pt == '+'){
		$kq = pheptinh($pt,$a,$b);
		echo "Ket qua phep cong : ".$kq;
	}
	else if($pt == '-'){
		$kq = pheptinh($pt,$a,$b);
		echo "Ket qua phep tru : ".$kq;
	}
	else if($pt == '*'){
		$kq = pheptinh($pt,$a,$b);
		echo "Ket qua phep nhan : ".$kq;
	}
	else if($pt == '/'){
		$kq = pheptinh($pt,$a,$b);
		echo "Ket qua phep chia : ".$kq;
	}
	else if($pt == '%'){
		$kq = pheptinh($pt,$a,$b);
		echo "Ket qua chia lay du  : ".$kq;
	}
}
?>
</body>
</html>
