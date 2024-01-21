<?php
$count = 100;
$array_ht = [];

for($i = 0; $i < $count; $i++){
$array_ht[$i] = mt_rand(0,1);
}

$countValues = array_count_values($array_ht);

?>


<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>コイントス</title>
        <style>
            .coin_h{
                color: red;
            }
            .coin_t{
                color: blue;
            }
        </style>
    </head>
    <body>
        <h1>コイントス</h1>
        <p>コイン投げの回数: <?php echo $count; ?><p>
        <?php 
        foreach($array_ht as $ht){
        if($ht === 0){
            echo '<span class ="coin_h"> H </span>';
        }else{
            echo '<span class ="coin_t"> T </span>';
        }
        }
        ?>
        <p>表が出た回数: <?php echo $countValues[0]; ?></p>
        <p>裏が出た回数: <?php echo $countValues[1]; ?></p>

    </body>
</html>