<?php
//身長はcm
$height = 172.5;

//体重はkg
$weight = 68.5;

//BMI(小数点第３位四捨五入) = 体重kg/身長m の２乗
$bmi = round($weight / (($height /100) ** 2) , 2);
?>

<!DOCTYPE html>
<html lang="ja">
 <head>
     <title>BMI算定アプリ</title>
 </head>
 <body>
     <h1>BMI算定アプリ</h1>
     <!-- [身長]センチ、[体重]キログラムのあなたのBMIは[bmi]です。」-->
     <p><?php echo $height; ?> センチ、<?php echo $weight; ?>キログラムのあなたのBMIは<?php echo $bmi;?>です。</p>
 </body>
</html>