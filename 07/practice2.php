<?php
//変数$numberに１を代入
$number = 1;

//変数$sumに0を代入
$sum = 0;

//$numberが100以下時まで繰り返し
while($number < 100){

//$numberを2で割ってあまりが0ではないならば
if($number % 2 !== 0){
//$sumに$numberを加算
$sum += $number;
//#numberに1を加算
}
$number++;
}
//合計値を出力
echo $sum;
?>
