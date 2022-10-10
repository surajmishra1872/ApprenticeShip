<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$f = $_POST['f'];
$s = $_POST['s'];
$op = $_POST['btn'];

switch($op){
	case '+':
		$cal = $f+$s;
		$operation ='addition';
	break;

	case '-':
		$cal = $f-$s;
		$operation ='subtraction';
	break;

	case '*':
		$cal = $f*$s;
		$operation ='multiply';
	break;

	case '/':
		$cal = $f/$s;
		$operation ='division';
	break;
}
echo "The {$operation} = {$cal}";
}
else{
	header("location:calculator.php");
}
?>