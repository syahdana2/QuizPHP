<?php
    $a = 1;
    $b = 2;
    if($a > $b)
        echo "a is greater than b";
    else
        echo "a is less than or equal to b";

    for($i = 0; $i < 10; $i++){
        echo "<br>The number is $i</br>";
    }
    echo "<hr>";

    $a = 19;
    if($a == 1)
        echo "one";
    elseif ($a == 2)
        echo "two";
    elseif ($a == 3)
        echo "three";
    elseif ($a == 4)
        echo "four";
    else
        echo "more than four";


    $x=0;
    echo "<hr>";
    while($x <= 5){
        echo "<br>The number is: $x</br>";
        $x++;
    }

    // contoh struktur kontrol switch
    $a = 1;
    switch ($a){
        case 0:
            echo "a equals to 0";
            break;
        case 1:
            echo "a equals to 1";
            break;
        default :
        echo "a is greater than 1";
    }
    echo "<hr>";

    
?>