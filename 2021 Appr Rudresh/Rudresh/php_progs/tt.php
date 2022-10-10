<?php
$arr =[10,20,30];
$i=0;
while(true)
{
if(@$arr[$i]=='')//@ used to hide error of Notice  and warning.
//if(@$arr[$i]==false)//@ used to hide error of Notice  and warning.
{
break;
}
$i=$i+1;
}
echo $i;
?>