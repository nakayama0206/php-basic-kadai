<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題011</title>
</head>
<body>
    <p>
        <?php
        $food_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        // 連想配列$food_dataのキーと値を1つずつ順番に出力する
        foreach ($food_data as $key => $value) {
            echo "{$key}：{$value}<br>";
        }
        ?>
</p>
</body>
</html>