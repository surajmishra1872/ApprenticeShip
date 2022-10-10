<?php
//wap in php to show $GLOBALS
//Example -2
$a = 10;//local variable
echo "The Local Variable ={$a}<br>";//local scope

function test(){
	global $a;
	echo "The value of gloabal before assign= {$a}<br>";
	$a=20;
	echo "The value of global after assign = {$a}<br>";
}
//calling test
test();
echo $a;//global to the function local to the script

//Note: if same variable is used inside local of the function local variable has the highest priority
// Any change done in the global variable within the function will be reflected outside
?>