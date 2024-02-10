<?php
date_default_timezone_set('Asia/Tokyo');

function h($string){
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

$errors =[];
$lines =[];

define('FILE_PATH','./log.txt');

$comment='';
$now = date('Y年n月d日H時i分s秒');
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['comment']) === TRUE){
        $comment =$_POST['comment'];
    }
    
    $fp =fopen(FILE_PATH, 'a');
    if($fp !== fALSE){
        $log = $comment."\t" . $now . "\n";
        
        $result =fwrite($fp, $log);
        if($result === FALSE){
            $error[] = 'ファイルの書き込みに失敗';
        }
        
        fclose($fp);
}
}

if(is_readable(FILE_PATH) === TRUE){
$lines=[];
$fp=fopen(FILE_PATH, 'r');
if($fp !== FALSE){
   $text=fgets($fp);
   
   while($text !== FALSE){
       $lines[]=$text;
       $text =fgets($fp);
   }
   fclose($fp);
}
}else{
    $errors[]='ファイルがありません';
}


?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>発言ログ</title>
    </head>
    <body>
        <h1>発言ログ</h1>
        <form method="post">
            <label>発言:<input type="text" name="comment"></label>
            <input type="submit" name="submit" value="送信">
        </form>
        <?php foreach($errors as $error){ ?>
        <p><?php print h($error); ?></p>
        <?php }?>
        <ul>
        <?php foreach($lines as $line){ ?>
        <li><?php print h($line);?></li>
        <?php }?>
        </ul>
    
    </body>
    
</html>