<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$name = $_POST['name'];
echo $name;
}
else{
	header("location:input.html");
}
?>