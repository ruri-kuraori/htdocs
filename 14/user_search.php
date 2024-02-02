<?php
$users = [
  '01' => [
    'id' => '01',
    'name' => '山田太郎',
    'address' => '東京都港区',
    'phone' => '090-0000-0000',
  ],
  '02' => [
    'id' => '02',
    'name' => '佐藤花子',
    'address' => '東京都杉並区',
    'phone' => '090-2222-2222',
  ],
  '03' => [
    'id' => '03',
    'name' => '山本二郎',
    'address' => '東京都豊島区',
    'phone' => '090-3333-3333',
  ],
  '04' => [
    'id' => '04',
    'name' => '田中三郎',
    'address' => '神奈川県横浜市',
    'phone' => '090-4444-4444',
  ],
  '05' => [
    'id' => '05',
    'name' => '斎藤さくら',
    'address' => '東京都台東区',
    'phone' => '090-5555-5555',
  ],
  '06' => [
    'id' => '06',
    'name' => '加藤桃',
    'address' => '東京都世田谷区',
    'phone' => '090-6666-6666',
  ],
];

function h($string){
  return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

$errors = [];

// 送信されたuser_idの受け取り

  $user_id = '';

if(isset($_GET['user_id']) === true){
  $user_id = $_GET['user_id'];
  
    if(isset($users[$user_id]) === false && $user_id !== ''){
    $errors[] = 'user_id:'. $user_id .'に該当するユーザーは存在しません';
    }
}

if($user_id === ''){
    $errors[] = 'uder_idを入力してください';
} 

// isset($users[$user_id]) === false ならばメッセージ





?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>ユーザー検索</title>
</head>
<body>
  <h1>ユーザー検索</h1>
  <?php foreach($errors as $error){ ?>
  <p class="error"><?php echo h($error); ?></p>
  <?php }?>
  <form method="get">
    <label>ユーザーid: <input type="number" name="user_id"></label>
    <input type="submit" value="検索">
  </form>

  <!-- 検索結果 or メッセージ表示 -->
<?php if(isset($_GET['user_id']) === true && count($errors) === 0){ ?>
  <h2>ユーザー : <?php echo $users[$user_id]['name']; ?></h2>
  <dl>
  <dt>ユーザーID</dt>
  <dd><?php echo h($_GET['user_id']); ?></dd>
    <dt>ユーザー名</dt>
  <dd><?php echo $users[$user_id]['name']; ?></dd>
    <dt>住所</dt> 
  <dd><?php echo $users[$user_id]['address']; ?></dd>
    <dt>電話番号</dt>
  <dd><?php echo $users[$user_id]['phone']; ?></dd>
  </dl>
  
 <?php }?>
</body>
</html>
