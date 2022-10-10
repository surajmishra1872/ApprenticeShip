#wap in php to make expression based calculator
include 'scanner.php';

$expression = input("Enter a Expression : ");
$res = eval("return {$expression};");
echo $res;