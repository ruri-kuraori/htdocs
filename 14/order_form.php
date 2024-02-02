

<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>注文フォーム</title>
        <style>
            .form label{
                display:block;
            }
        </style>
    </head>
    <body>
        <h1>注文フォーム</h1>
        <form method="post" action="order_confirm.php">
            <p class="form">
            <label>注文者名<input type="text" name="user_name"></label>
            <label>注文者住所<input type="text" name="address"></label>
            <label>注文者電話番号<input type="text" name="tel"></label>
            </p>
            <p class="form">
            <span>購入を希望する商品</span>
            <label>
                単品:<input type="radio" name="product_name" value="単品">
            </label>
            <label>
                3個入り:<input type="radio" name="product_name" value="3個入り">
            </label>
            <label>
                10個入り:<input type="radio" name="product_name" value="10個入り">
            </label>
            </p>
            <p class="form">
            <label>紙の領収書を希望する：
            <input type="hidden" name="checkbox_receipt" value="不要">
            <input type="checkbox" name="checkbox_receipt" value="要">
            </label>
            </p>
            
            <input type="submit" value="注文内容を送信">
            
            
        </form>
    </body>
</html>