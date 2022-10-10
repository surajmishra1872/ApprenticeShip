<?php
//for request get / post
switch($_SERVER['REQUEST_METHOD'])
{
	case 'POST':
	$name=$_POST['name'];//name = name attribute //super global variable
	display_name($name);
	//echo 'valid Request';
	break;

	default:
	//echo "Bewakoof aadmi btn click kr";.
	header("location:input.html");
	break;
}

//function definition
function display_name($name){
echo "Hello Mr. {$name}";
}
?>
