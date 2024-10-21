<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編課題16</title>
</head>
<body>
    <p>
        <?php
        // クラスを定義
        class Food{
            private $name;
            private $price;

            // コンストラクタを定義
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
        }
        // インスタンス化する
        $potato = new Food('potato', 250);

        // インスタンスの各プロパティの値を出力する
        print_r($potato);
        ?>
    </p>
    <p>
        <?php
        // クラスを定義
        class Animal{
            private $name;
            private $height;
            private $weight;

        // コンストラクタを定義
        public function __construct(string $name, int $height, int $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
        }
        // インスタンス化する
        $dog = new Animal('dog', 60, 5000);

        // インスタンスの各プロパティの値を出力する
        print_r($dog);
        ?>
    </p>
</body>
</html>