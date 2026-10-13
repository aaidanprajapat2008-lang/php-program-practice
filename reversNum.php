<?php
$num = 123;
$reverse = 0;
while ($num != 0) {
    $reverse = $reverse * 10 + $num % 10;
    $num = (int)($num / 10);
}
echo "The reversed number is: $reverse";
?>