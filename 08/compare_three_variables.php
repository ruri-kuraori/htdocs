<?php
//$a $b $c に0-2の範囲の乱数を代入
$a = mt_rand(0, 2);
$b = mt_rand(0, 2);
$c = mt_rand(0, 2);

if($a > $b && $a > $c){
//$aが最も大きい
$result = "変数aが最も大きい";

}elseif($b > $a && $b > $c){
//$bが最も大きい
$result = "変数bが最も大きい";

}elseif($c > $a && $c > $b){
//$cが最も大きい
$result = "変数cが最も大きい";

}elseif($a === $b && $a >$c){
//$a $bが最も大きい
$result = "変数aとbが最も大きい";

}elseif($b === $c && $b > $a){
//$b $cが最も大きい
$result = "変数bとcが最も大きい";
}elseif($c === $a && $a > $b){
//$c $aが最も大きい
$result ="変数aとcが最も大きい";
}else{
//$a $b $cが同じ値です
$result = "全て同じ値です";
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>３つの整数の比較</title>
    </head>
    <body>
        <h1>3つの整数の比較</h1>
        <p>$a: <?php echo $a; ?></p>
        <p>$b: <?php echo $b; ?></p>
        <p>$c: <?php echo $c; ?></p>
        <p><?php echo $result; ?></p>
    </body>
</html>