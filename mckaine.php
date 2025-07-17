<?php
    $a = 10;
    $b = 20;
    $c = 30;
    $d = 40;

    $add = $a + $b;
    $sub = $c - $b;
    $mul = $a * $d;
    $div = $d / $b;
    $total = $add + $sub + $mul + $div;
    $average = $total / 4;


    echo "The addition 10 and 20: $add";
    echo "<br>subtraction of 30 and 20: $sub";
    echo "<br>multiplication of 10 and 40: $mul";
    echo "<br>division of 40 and 20: $div";
    echo "<br>total of operation: $total";
    echo "<br>average of result: $average";
?>