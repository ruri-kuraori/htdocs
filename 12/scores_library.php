<?php

$english_scores = [98, 38, 89, 84, 54];
$math_scores = [92, 81, 59, 84, 34, 59];
$japanese_scores = [57, 68, 19, 74, 94];


function get_sum($scores){
    foreach($scores as $score){
        $sum = 0;
        $sum += $score;
        return $sum;
    }
}

function get_average($scores){
    $average = round(get_sum($scores) / count($scores), 2);
    return $average;
}

?>
