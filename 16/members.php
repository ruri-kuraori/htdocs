<?php

function h($string){
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

$errors=[];
$lines =[];
    
define('FILE_PATH', './members.csv');

$id='';
$name='';
$address='';
$tell='';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['id']) === TRUE){
     $id = $_POST['id'];
    }
    
    if(isset($_POST['name']) === TRUE){
     $name = $_POST['name'];
    }
    
    if(isset($_POST['address']) === TRUE){
     $address = $_POST['address'];
    }
    
    if(isset($_POST['tell']) === TRUE){
     $tell = $_POST['tell'];
    }
    



$fp = fopen(FILE_PATH, 'a');
if($fp !== FALSE){
    $datas = [$id,$name,$address,$tell];
    $line=implode(',',$datas);
    $result = fwrite($fp, $line. "\n");
    if($result === FALSE){
        $errors[]='ファイルの書き込み失敗:' . FILE_PATH;
    }
    fclose($fp);

}
}
if(is_readable(FILE_PATH) === TRUE){
    
$fp =fopen(FILE_PATH, 'r');
if($fp !== FALSE){
    $text = fgetcsv($fp);
    while($text !== FALSE){
        $lines[] = $text;
        $text = fgetcsv($fp);
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
        <title>名簿作成アプリ</title>
         <style>
         label{
             display:block;
         }

            table{
                border-collapse:collapse;
            }
            th, td{
                border:solid 1px black;
                padding:5px;
            }
        </style>
    </head>
    <body>
        <h1>名簿作成アプリ</h1>
        <?php foreach($errors as $error){ ?>
        <p><?php print $error; ?></p>
        <?php }?>
        <form method="post">
            <label>ID:<input required type="text" name="id"></label>
            <label>名前:<input required type="text" name="name"></label>
            <label>住所:<input required type="text" name="address"></label>
            <label>電話番号:<input required type="text" name="tell"></label>
            <input type="submit" name="submit" value="送信">
        </form>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>名前</th>
                    <th>住所</th>
                    <th>電話番号</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lines as $line){ ?>
                <tr>
                    <td><?php print h($line[0]); ?></td>
                    <td><?php print h($line[1]); ?></td>
                    <td><?php print h($line[2]); ?></td>
                    <td><?php print h($line[3]); ?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </body>
</html>