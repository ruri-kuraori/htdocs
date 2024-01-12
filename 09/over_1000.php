
<?php
$sum = 0;

for($i = 0; $sum <= 1000; $i++){
    $sum += $i;
    if($sum > 1000){
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>合計が初めて1000を超えるのは</title>
</head>
<body>
  <h1>合計が初めて1000を超えるのは</h1>

  <p>合計値:<?php echo $sum;?></p>

  <p>最後に足した値:<?php echo $i;?></p>
  
  

</body>
</html>