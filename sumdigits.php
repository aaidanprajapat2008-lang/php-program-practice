<?php
    $number = 123;
    $sum = 0;
    while ($number > 0) {
        $digit = $number % 10;
        $sum += $digit;
        $number = intval($number / 10);
    }
    echo "The sum of digits is: " . $sum;
?>