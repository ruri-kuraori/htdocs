<?php
require_once 'scores_library.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>科目別得点</title>
</head>
<body>
    <h1>科目別得点</h1>
    <p>英語のスコア合計は<?php echo get_sum($english_scores); ?>点、平均<?php echo get_average($english_scores); ?>点です。</p>
    <p>数学のスコア合計は<?php echo get_sum($math_scores); ?>点、平均<?php echo get_average($math_scores); ?>点です。</p>
    <p>国語のスコア合計は<?php echo get_sum($japanese_scores); ?>点、平均<?php echo get_average($japanese_scores); ?>点です。</p>
</body>
</html>