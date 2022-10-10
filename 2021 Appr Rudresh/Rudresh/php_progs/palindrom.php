<?php
include'scanner.php';
$rem;
$res=0;
$temp;
$n =input("Enter  Number : ");
$temp = $n;
while($n>0){
$rem=$n%10;
$res=$res*10+$rem;
$n=$n/10;
}
echo $res;
exit;
if($temp==$res){
echo "n is palindrom";
}else{
echo "$n is not palindrom";
}