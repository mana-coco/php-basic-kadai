<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
      //ソートする配列を宣言
      $nums = [15,4,18,23,10];

      //ソートの順序を指定
      $order = true; 

      if($order === true){
        echo '昇順にソートします。'.'<br>';
        sort($nums);
        foreach($nums as $num){
            echo $num.'<br>';
        }
      }

      $order = false;

      if ($order === false) {
        echo '<br>降順にソートします。'.'<br>';
        $desc_nums = $nums; //元の配列をコピー
        rsort($desc_nums);
        foreach ($desc_nums as $num) {
            echo $num.'<br>';
        }
      }
    ?>
    </p>
</body>

</html>