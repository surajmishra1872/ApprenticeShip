<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$f = $_POST['f'];
$s = $_POST['s'];
// $n = $_POST['bb'];
// echo "$n";
// echo $f,"\n",$s;
// if($n==add) {
// 	echo "hello";
// }
if ($_POST['bb']=="add") {
	echo "<h1> The Sum is : ",$f+$s,"</h1>";
}
else if ($_POST['bb']=="sub") {
	echo "<h1> The Substract is : ",$f-$s,"</h1>";
}
else if ($_POST['bb']=="mul") {
	echo "<h1> The Multiply is : ",$f*$s,"</h1>";
}
else if ($_POST['bb']=="div") {
	echo "<h1> The Divide is : ",$f/$s,"</h1>";
}
}
else{
	header("location:calculator.php");
}
?>