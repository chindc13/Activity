<!-- Write a Program to create given pattern with * using for loop -->
<!-- Write a Program to create following pattern using for loops: -->
<!-- 
    *
    **
    ***
    ****
    *****
    ******
    *******
    ********
 -->

 <!-- 
    Rules

    You can use for or while loop
    You can use multiple (nested) loop to draw above pattern
-->

<?php
    for($row = 1; $row <= 8; $row++){
        for($col = 1; $col <= $row; $col++){
            echo '*';
        }
        echo '</br>';
    }
?>