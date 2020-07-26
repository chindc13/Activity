<!-- Write a Program to display count, from 5 to 15 using PHP loop as given below. -->

<!-- 
    Rules & Hint

    You can use “for” or “while” loop
    You can use variable to initialize count
    You can use html tag for line break 
-->

<?php

    for($i = 5; $i <= 15; $i++){
        echo $i.'</br>';
    }

    echo '</br></br>';

    $j = 5;
    while($j <= 15){
        echo $j++.'</br>';
    }

?>