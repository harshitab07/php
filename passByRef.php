<?php
function passByValue ($a) {
    $a = 10;
}

function passByRef(&$a) {
    $a = 10;
}

$a = 5;
echo "Original number: " . $a . "\n";

passByValue($a);
echo "Number after pass by value: " . $a . "\n";

passByRef($a);
echo "Number after pass by ref: " . $a . "\n";
?>