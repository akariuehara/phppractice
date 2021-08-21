<?php
function sum($limit){
    $result = 0;
    for($i = 1; $i <= $limit; $i++){
        $result += $i;
    }
    return $result;
    
    
}

echo sum(10);
?>
