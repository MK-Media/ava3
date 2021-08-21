<?php
    $nums = array();    
    for($c = 0; $c<10; $c++){
        array_push($nums, random_int(1,10));
    }
    var_dump($nums);
    
    $n = (array_count_values($nums));
    
    $m = max($n);
    
    $q = array_search($m, $n);
    
    echo $q." / ".$m;
    
?>