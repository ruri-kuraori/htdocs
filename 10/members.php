<?php

$members = [
  [
    'id' => 11,
    'family_name' => '山田',
    'first_name' => '太郎',
    'age' => 35,
    'gender' => '男性',
    'address' => '東京都港区',
  ],
  [
    'id' => 12,
    'family_name' => '佐藤',
    'first_name' => '花子',
    'age' => 28,
    'gender' => '女性',
    'address' => '東京都中央区',
  ],
  [
    'id' => 13,
    'family_name' => '斎藤',
    'first_name' => '次郎',
    'age' => 41,
    'gender' => '男性',
    'address' => '東京都豊島区',
  ],
  [
    'id' => 14,
    'family_name' => '山本',
    'first_name' => '三郎',
    'age' => 52,
    'gender' => '男性',
    'address' => '東京都世田谷区',
  ],
];



?>
<!DOCTYPE hrml>
<html lang="ja">
    <head>
        <title>2次元配列</title>
        <style>
          table { 
            border-collapse: collapse;
           }
          th,td {
            border: solid 1px black;
            padding: 3px;
           }
        </style>
    </head>
    <body>
        <h1>2次元配列</h1>
        <ul>
  
            <?php 
                foreach($members as $member){
                echo '<li>' . $member['family_name'].' '. $member['first_name'].': '.
                $member['address']. ' '. $member['age']. '才</li>';
                }
            ?>
        </ul>
        <table>
          <tr>
            <th>id</th>
            <th>姓</th>
            <th>名</th>
            <th>年齢</th>
            <th>性別</th>
            <th>住所</th>
          </tr>
          <?php 
          foreach($members as $member => $numbers){ ?>
          <tr>
            <?php
            foreach($numbers as $number => $value){
            ?>
            <td><?php echo $value ?></td>
            <?php }?>
          </tr>
          <?php }?>
          </table>

    </body>
</html>