
<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>FizzBuzz</title>
    </head>
    <body>
        <h1>FizzBuzz</h1>
        <?php
        for($i = 1; $i <=100; $i++){ 
            if($i%3 === 0 && $i%5 === 0){ 
                echo  '<p>FizzBuzz!</p>';
            }elseif($i%3 === 0){
                echo  '<p>Fizz!</p>';
            }elseif($i%5 === 0){
                echo  '<p>Buzz!</p>';
            }else{
                echo '<p>' . $i .'</p>';
            }
        }?>
    </body>
</html>
