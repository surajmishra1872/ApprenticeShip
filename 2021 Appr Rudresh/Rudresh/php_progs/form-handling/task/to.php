<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$a = $_POST['a1'];
$b = $_POST['a2'];
$c = $_POST['a3'];
echo "<h1>Your Answer is:",($a+$b+$c)/2,"</h1>";
}
else{
	header("location:input.html");
}
?>