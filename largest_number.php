<?php

$num1 = 4; //variable number 1
$num2 = 5; //variable number 2
$num3 = 6; //variable number 3


if ($num1 > $num2 && $num1 > $num3) {
    echo "$num1 is the largest number then others.";
}elseif($num2 > $num1 && $num2 > $num3){
    echo "$num2 is the largest number then others.";
}else{
    echo "$num3 is the largest number then others.";
}