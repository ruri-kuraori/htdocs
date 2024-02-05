<?php

function h($string){
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

$_hand = ['グー','チョキ','パー'];

// 相手の手をランダムに選択
$your_hand='';
$your_hand = $_hand[mt_rand(0,2)];




// POSTから自分の手を取得
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $your_hand='';
    $your_hand = $_hand[mt_rand(0,2)];
    
    $my_hand ='';
    if(isset($_POST['my_hand']) === true){
        $my_hand = $_POST['my_hand'];
    }
    
    $result ='';
    if($my_hand === $your_hand){
        $result = 'あいこ';
    }elseif($my_hand === 'グー' && $your_hand === 'パー' ||
            $my_hand === 'チョキ' && $your_hand === 'グー' ||
            $my_hand === 'パー' && $your_hand === 'チョキ'){
        $result = '負け';
    }else{
        $result = '勝ち';
    }
};


?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>じゃんけん勝負</title>
    </head>
    <body>
        <h1>じゃんけん勝負</h1>
        <!--POSTされたら-->
        <?php if($_SERVER['REQUEST_METHOD'] === 'POST'){ ?>
        <!--自分の手を表示-->
        <p>自分:<?php echo h($my_hand); ?></p>
        <!--相手の手を表示-->
        <p>相手:<?php echo h($your_hand); ?></p>
        <!--結果を表示-->
        <p>結果:<?php echo h($result);?></p>
        
        <?php } ?>
        
        <!--ラジオボタンでグーチョキパーを選択-->
        <form method="post">
            <div>
                <label><input type="radio" name="my_hand" value="グー">グー</label>
                <label><input type="radio" name="my_hand" value="チョキ">チョキ</label>
                <label><input type="radio" name="my_hand" value="パー" >パー</label>
            </div>
            <input type="submit" value="勝負">
            
        </form>
        
     
        
    </body>
</html>