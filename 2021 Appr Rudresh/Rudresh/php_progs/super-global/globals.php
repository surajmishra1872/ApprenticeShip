<?php
//wap in php to show $GLOBALS
$a = 10;//local variable
echo "The Local Variable ={$a}<br>";//local scope

function test(){
	global $a;
	$b=20;
	echo "The value of local b = {$b}<br>";
	echo "The value of gloabal a = {$a}<br>";
}
//calling test
test();
echo $a;//global to the function local to the script
?>