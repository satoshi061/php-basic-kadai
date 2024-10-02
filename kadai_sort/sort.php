<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //関数定義
        function sort_2way($arrays, $order) {
          if ($order) {
            sort($arrays);
            echo '昇順にソートします。<br>';
            foreach ($arrays as $array) {
              echo $array. '<br>';
            }
          } else {
            rsort($arrays);
            echo '降順にソートします。<br>';
            foreach ($arrays as $array) {
              echo $array. '<br>';
            }
          }
        }

        //関数呼び出し
        $nums = [15, 4, 18, 23, 10];
        sort_2way($nums, true);
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>