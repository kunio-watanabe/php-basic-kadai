<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
     
     // ソート用の関数を作成（昇順 or 降順）
     function sort_2way(&$array, $order) {
         if ($order) {
             // 昇順ソート（小さい順）
             sort($array);
         } else {
             // 降順ソート（大きい順）
             rsort($array);
         }
     }
     
     // ソートする配列を用意
     $nums = [15, 4, 18, 23, 10];
     
     // 昇順でソートして出力
     sort_2way($nums, true);
     echo "昇順ソート：<br>";
     foreach ($nums as $n) {
         echo $n . "<br>";
     }
     
     echo "<br>"; // 区切りの改行
     
     // 降順でソートして出力
     sort_2way($nums, false);
     echo "降順ソート：<br>";
     foreach ($nums as $n) {
         echo $n . "<br>";
     }
     ?>
     

    </p>
</body>

</html>