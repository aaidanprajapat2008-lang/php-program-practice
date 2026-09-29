<?php
$num = 123;
$originalNum = $num;
$reversedNum = 0;
while ($num > 0) {
    $digit = $num % 10;
    $reversedNum = $reversedNum * 10 + $digit;
    $num = (int)($num / 10);
}
if ($originalNum == $reversedNum) {
    echo "$originalNum is a palindrome.";
} else {
    echo "$originalNum is not a palindrome.";
}
?>