<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$r = $_POST['r1'];
$area = 3.14*$r*$r;
echo "Area of circle : ",$area;
}
else{
	header("location:task1.php");
}
?>