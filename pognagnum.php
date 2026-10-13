<?php
$a= 10;
$b= -5;
if($a>0 && $b>0){
    echo "Both numbers are positive.";
}
elseif($a<0 && $b<0){
    echo "Both numbers are negative.";
}
elseif($a>0 && $b<0){
    echo "The first number is positive and the second number is negative.";
}
elseif($a<0 && $b>0){
    echo "The first number is negative and the second number is positive.";
}   
?>