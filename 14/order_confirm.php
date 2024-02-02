<?php

var_dump($_POST);

function h($string){
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

$errors=[];

$user_name='';
if(isset($_POST['user_name']) === true){
    $user_name = $_POST['user_name'];
}

$address='';
if(isset($_POST['address']) === true){
    $address = $_POST['address'];
}

$tel='';
if(isset($_POST['tel']) === true){
    $tel = $_POST['tel'];
}

$product_name='';
if(isset($_POST['product_name']) === true){
    $product_name =$_POST['product_name'];
}

$checkbox_receipt='';
if(isset($_POST['checkbox_receipt']) === true){
    $checkbox_receipt =$_POST['checkbox_receipt'];
}

if($user_name === ''){
    $errors[]='名前を入力してください';
}

if($address === ''){
    $errors[]='住所を入力してください';
}

if($tel === ''){
    $errors[]='電話番号を入力してください';
}

if($product_name === ''){
    $errors[]='購入を希望する商品を選択してください';
}


?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>注文確認画面</title>
        <style>
            .error {
                color:red;
            }
        </style>
    </head>
    <body>
        <h1>注文確認画面</h1>
        <?php foreach($errors as $error){ ?>
        <span class="error"><?php echo h($error). '<br>'; ?></span>
        <?php }?>
        <dl>
            <dt>注文者名</dt>
            <dd><?php echo h($user_name); ?></dd>
            <dt>注文者住所</dt>
            <dd><?php echo h($address); ?></dd>
            <dt>注文者電話番号</dt>
            <dd><?php echo h($tel); ?></dd>
            <dt>商品名</dt>
            <dd><?php echo h($product_name); ?></dd>
            <dt>領収書</dt>
            <dd><?php echo h($checkbox_receipt); ?></dd>
        </dl>
        <button type="button">注文を確定</button>
        <button type="button" onclick="location.href='order_form.php'" >戻る</button>
        
        
    </body>
    
</html>