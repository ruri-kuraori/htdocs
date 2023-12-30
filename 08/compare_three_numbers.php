<?php

$a = mt_rand(1, 100);
$b = mt_rand(1, 100);
$c = mt_rand(1, 100);



if($a >= $b && $a >= $c){
    ##$aが最大値の場合
    $max = $a;
}elseif($b >= $a && $b >= $c){
    ##bが最大値の場合、
    $max = $b;
}else{
##cが最大値の場合
    $max = $c;
};

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>最大値の判定</title>
    </head>
    <body>
        <h1>最大値の判定</h1>
        <!--　最大値を表示する-->
        <p><?php echo $a; ?></p>
        <p><?php echo $b; ?></p>
        <p><?php echo $c; ?></p>
        <!-- 「最大値：最大値」-->
        <p>最大値：<?php echo $max; ?></p>
    </body>
</html>