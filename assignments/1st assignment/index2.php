<?php

// $name = 'Pumin';

// $var1 = 10;
// $var2 = 5;

// $var1 - $var2;

$number = 1;

while ($number <= 10) {
    echo $number . '<br>';
    if ($number == 5) {

        $number2 = 10;
        while ($number2 >= 1) {
            echo $number2 . ' ';
            if ($number2 == 6) {
                break;
            }
            $number2--;
        }
        echo '<br>';
    }
    $number++;
}
?>