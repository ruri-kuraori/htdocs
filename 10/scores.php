<?php

$english_scores = [765, 820, 440, 530, 900, 960, 735];

$sum = array_sum($english_scores);
$count = count($english_scores);
$average = $sum / $count;

array_push($english_scores, 620 , 555 , 590);

$sum_add = array_sum($english_scores);
$count_add = count($english_scores);
$average_add = $sum_add / $count_add;

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>スコア合計と平均値の算出</title>
    </head>
    <body>
        <h1>スコア合計と平均値の算出</h1>
        <p>スコア合計<?php echo $sum; ?></p>
        <p>スコア平均値<?php echo round($average,2); ?></p>
        <p>スコア合計(追加含む)<?php echo $sum_add;?></p>
        <p>スコア平均値(追加含む)<?php echo round($average_add , 2);?></p>
    </body>
</html>