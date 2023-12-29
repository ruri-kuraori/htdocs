<?php
// 今日の売上は500ドル
$sales_today = 500;
// 今日のかかったお金は50ドル
$cost = 50;
// 今日の１ドルは110円
$rate = 110;
// 今日のチームは3人
$number_of_team = 3;

// 結果を入れておく変数
$result = 0;

// 1. 複合代入演算子でresultにsales_todayを足す
$result += $sales_today;

// 今日の売上を出力
echo '今日の売上は' . $result . 'ドルです。<br>';

// 2. 複合代入演算子でresultからcostを引く
$result -= $cost;

// 出力
echo '今日の利益は' . $result . 'ドルです。<br>';

// 3. 複合代入演算子でresultにrateを掛ける
$result *= $rate;

// 出力
echo '今日の利益は日本円で' . $result . '円です。<br>';

// 4. 複合代入演算子でresultをnumber_of_teamで割る
$result /= $number_of_team;

// 出力
echo '一人あたりの利益は' . $result . '円です。<br>';