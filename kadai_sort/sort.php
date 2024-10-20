<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $num = [15, 4, 18, 23, 10];
        function sort_2way($array, $order) {
            if ($order) {
                sort($array);
                echo "昇順にソートします。<br>";
            } else {
                rsort($array);
                echo "降順にソートします。<br>";
            }
        
            foreach ($array as $value) {
                echo "{$value}<br>";
            }
        }
        // 昇順でソート
        sort_2way($num, true);
        
        echo "<br>";
        
        // 降順でソート
        sort_2way($num, false);
        ?>
    </p>
</body>

</html>