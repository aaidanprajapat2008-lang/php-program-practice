<?php
$a = 45;
$b = 55;
$c = 65;
if ($a >= $b && $a >= $c) {
    echo "The largest number is: $a";
} elseif ($b >= $a && $b >= $c) {
    echo "The largest number is: $b";
} else {
    echo "The largest number is: $c";
}
?>