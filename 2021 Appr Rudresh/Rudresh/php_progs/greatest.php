<?php
include'scanner.php';
$n1 =input("Enter first Number : ");
$n2 =input("Enter second Number : ");
$n3 =input("Enter third Number : ");

if($n1>$n2 && $n1>$n3)
{
echo "$n1 is greatest number";
}elseif($n2>$n3 && $n2>$n1)
{
echo "$n2 is greatest number";
}else{
echo "$n3 is greatest";
}