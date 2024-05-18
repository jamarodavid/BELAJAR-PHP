<?php 
    // nested loop (loop bersarang)
    for($i = 0; $i < 10; $i++){
        $start = "";
    for($j = 0; $j <= $i; $j++){
        $start .= "*";
    }
    echo "<br>";
    echo $start;
    }

?>
