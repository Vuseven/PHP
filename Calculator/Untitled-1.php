<?php
$currentValue = 0;
$input = [];
function getInputAsString($values){
    $o = "";
    foreach ($values as $value){
        $o .= $value;
    }
    return $o;
}
function calculateInput($userInput){
    // dinh dang dau vao cua nguoi dung
    $arr = [];
    $char = "";
    foreach ($userInput as $num){
        if(is_numeric($num) || $num == "."){
            $char .= $num;
        }else if(!is_numeric($num)){
            if(!empty($char)){
                $arr[] = $char;
                $char = "";
            }
            $arr[] = $num;
        }
    }
    if(!empty($char)){
        $arr[] = $char;
    }
    // tinh toan dau vao cua nguoi dung
    $current = 0;
    $action = null;
    for($i=0; $i<= count($arr)-1; $i++){
        if(is_numeric($arr[$i])){
            if($action){
                if($action == "+"){
                    $current = $current + $arr[$i];
                }
                if($action == "-"){
                    $current = $current - $arr[$i];
                }
                if($action == "x"){
                    $current = $current * $arr[$i];
                }
                if($action == "/"){
                    $current = $current / $arr[$i];
                }
                $action = null;
            }else{
                if($current == 0){
                    $current = $arr[$i];
                }
            }
        }else{
            $action = $arr[$i];
        }
    }
    return $current;
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['input'])){
        $input = json_decode($_POST['input']);
    }
    if(isset($_POST)){
        foreach ($_POST as $key=>$value){
            if($key == 'equal'){
               $currentValue = calculateInput($input);
               $input = [];
               $input[] = $currentValue;
            }elseif($key == "ce"){
                array_pop($input);
            }elseif($key == "c"){
                $input = [];
                $currentValue = 0;
            }elseif($key == "back"){
                $lastPointer = count($input) -1;
                if(is_numeric($input[$lastPointer])){
                    array_pop($input);
                }
            }elseif($key != 'input'){
                $input[] = $value;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Calculator</title>
	<style>
	body{
		margin: 10px 500px;
		background-color: #CCCCCC;
	}
	div{
		width: 280px;
		border: 3px solid #ccc;
		border-radius: 3px;
		padding: 10px;
		display: inline-block;
		background-color: #FF99CC;
		border-radius: 10px;
	}
	input{
		width: 239px;
		height: 55px;
		padding: 0px 10px;
		margin: 0px 8px;
		border-radius: 3px;
	}
	table input{
		width: 55px;
		height:55px;
		margin: 0px 5px;
	}
	table button{
		width: 55px;
		height:55px;
		margin: 0px 5px;
		border-radius: 3px;
	}
	input:hover{
		background-color:#666666;
		color:#FFFFFF
	}
	button:hover{
		background-color:#666666;
		color:#FFFFFF
	}
	</style>
</head>
<body>
<h1>My Calculator</h1>
<div>
    <form method="post">
    <input type="hidden" name="input" value='<?php echo json_encode($input);?>'/>
	<input type="text" value='<?php echo getInputAsString($input);?>' readonly/>
    <table>
        <tr>
            <td><input type="submit" name="ce" value="CE"/></td>
            <td><input type="submit" name="c" value="C"/></td>
            <td><button type="submit" name="back" value="back">&#8592;</button></td>
            <td><button type="submit" name="divide" value="/">&#247;</button></td>
        </tr>
        <tr>
            <td><input type="submit" name="7" value="7"/></td>
            <td><input type="submit" name="8" value="8"/></td>
            <td><input type="submit" name="9" value="9"/></td>
            <td><input type="submit" name="multiply" value="x"/></td>
        </tr>
        <tr>
            <td><input type="submit" name="4" value="4"/></td>
            <td><input type="submit" name="5" value="5"/></td>
            <td><input type="submit" name="6" value="6"/></td>
            <td><input type="submit" name="minus" value="-"/></td>
        </tr>
        <tr>
            <td><input type="submit" name="1" value="1"/></td>
            <td><input type="submit" name="2" value="2"/></td>
            <td><input type="submit" name="3" value="3"/></td>
            <td><input type="submit" name="add" value="+"/></td>
        </tr>
        <tr>
            <td><button type="submit" name="plusminus" value="plusminus">&#177;</button></td>
            <td><input type="submit" name="zero" value="0"/></td>
            <td><input type="submit" name="." value="."/></td>
            <td><input type="submit" name="equal" value="="/></td>
        </tr>
    </table>
</div>
</body>
</html>
