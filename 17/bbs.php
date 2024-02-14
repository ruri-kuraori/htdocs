<?php

function h($string){
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

$errors=[];
$lines=[];

define('FILE_PATH', './bbs.txt');

$user_name='';
$comment='';
$time=date('Y年n月d日H時i分s秒');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['user_name']) === TRUE){
        $user_name=$_POST['user_name'];
        $limit=11;
        $length=mb_strlen($user_name,'UTF-8');
        if(empty($user_name)){
            $errors[]='名前を入力してください';
        }else{
            if($limit<$length){
            $errors[]='名前は10桁以内で入力してください';
        }
    }
    }
    if(isset($_POST['comment']) === TRUE){
        $comment=$_POST['comment'];
        $limit=101;
        $length=mb_strlen($comment, 'UTF-8');
        if(empty($comment)){
            $errors[]='コメントを入力してください';
        }else{
            if($limit<$length){
            $errors[]='コメントは100文字以内で入力してください';
        }
    }
    }
    

    
    $fp=fopen(FILE_PATH, 'a');
    if($fp !== FALSE){
        if(count($errors)  === 0){
        $datas=[$user_name,$comment,$time];
        $line=implode(',',$datas);
        
        $result=fwrite($fp, $line."\n");
        if($result === FALSE){
            $errors[]='ファイルの書き込みに失敗';
        }
        }
        fclose($fp);
    }
}


if(is_readable(FILE_PATH) === TRUE){
    $lines=[];
    $fp=fopen(FILE_PATH, 'r');
    if($fp !== FALSE){
        $text=fgetcsv($fp);
        
        while($text !== FALSE){
            $lines[]=$text;
            $text = fgetcsv($fp);
        }
        fclose($fp);
    }
}else{
    $errors[]='ファイルがありません';
}



?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ひとこと掲示板</title>
        <style>
            label{
                display:block;
            }
            .error{
                color:red;
            }
            textarea{
                width:300px;
                height:200px;
            }
        </style>
        
    </head>
    <body>
        <h1>ひとこと掲示板</h1>
        <?php foreach($errors as $error){ ?>
        <p class="error"><?php print h($error); ?></p>
        <?php } ?>
        <form method="post">
           <label>名前</label>
           <input type="text" name="user_name">
           <label>コメント</label>
           <textarea type="text" name="comment"></textarea>
           <input type="submit" name="submit" value="送信">
        </form>

        <?php $lines_rev=array_reverse($lines); ?>
        <?php foreach($lines_rev as $line) {?>
        <p><?php print h($line[0]); ?></p>
        <p><?php print h($line[1]); ?></p>
        <p><?php print h($line[2]); ?></p>
        <?php } ?>
        
    </body>
</html>