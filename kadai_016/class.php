<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題016</title>
</head>
<body>
    <!-- 
- プログラミング言語:PHP
- クラス名:Food
- プロパティ 
    - name
    - price
- クラス名:Animal
- プロパティ 
    - name
    - height
    - weight
- コンストラクタ: 各プロパティに値を代入する
    Foodクラスには「price」プロパティの値を出力する「show_price」メソッド
    Animalクラスには「height」 プロパティの値を出力する「show_height」メソッド
    -->
    <p>
    <?php
    class Food {

        // プロパティ
        private $name;
        private $price;
        
        // コンストラクタを定義する
        public function __construct(string $name, int $price)
        {
            $this->name = $name;
            $this->price = $price;
        }
        // メソッド　show_price
        public function show_price() {
            echo $this->price . '円';
        }
    }

        // インスタンス化する
        $potato = new Food('potato', 250);
        // メソッドの呼び出し
        echo '価格: ';
        $potato->show_price();

        // インスタンス$foodの各プロパティの値を出力する
        echo '<pre>';
        print_r($potato);
        echo '</pre>';

    class Animal {

        // プロパティ
        private $name;
        private $height;
        private $weight;
        
        // コンストラクタを定義する
        public function __construct(string $name, int $height, string $weight)
        {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
        // メソッド　show_price
        public function show_height() {
            echo $this->height . 'cm';
        }
    }

        // インスタンス化する
        $dog = new Animal('dog', 60, 5000);
        // メソッドの呼び出し
        echo '身長: ';
        $dog->show_height();

        // インスタンス$animalの各プロパティの値を出力する
        echo '<pre>';
        print_r($dog);
        echo '</pre>';
    ?>
    </p>
</body>
</html>