<?php
    $fruits = array('Apple', 'Mango', 'Banana');

    foreach ($fruits as $f) {
        echo $f." ";
    }
?>

<?php
    $i = 1;
    $num = 17;
    while($i <= 10) {
        echo $num." x ".$i." = ".$num * $i."\n";
        $i++;
    }
?>

<?php
    $i = 11;
    do {
        echo "Printing if i < 10 \n i = ".$i;
        $i++;
    } while ($i < 10);

    while ($i < 10) {
        echo "Printing if i < 10 \n i = ".$i;
        $i++;
    }
?>

<?php
    $fruits = array(1, 2, 3);

    $sum = 0;
    $n = count($fruits);
    for ($i = 0; $i < $n; $i++) {
        $sum += $fruits[$i];
    }

    echo "Sum = ".$sum;
?>

function fibonacci(num $n) {
    $ans = array(0, 1);

    for ($i=2, $i<$n; $i++) {
        $ans[i] = $ans[i-2] + $ans[i-1];
    }

    return $ans;
}

$fs = fibonacci(6);
foreach($fs as $f) {
    echo " ".$f;
}