<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編課題16</title>
</head>
<body>
    <p>
        <?php
        //クラスを定義する
        class Food {
            // プロパティを定義する
            private $name;
            private $price;

            // コンストラクタを定義する
             public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
             // メソッドを定義
            public function show_price(){
                 echo $this->price;
            }        
        }
        //インスタンス化する
        $food = new Food('potato', 250);
        // インスタンス$foodの各プロパティの値を出力する
        print_r($food);
        // 改行
        echo '<br>';

        //クラスを定義する
        class Animal {
            // プロパティを定義する
            private $name;
            private $heigt;
            private $weight;
            // コンストラクタを定義する
            public function __construct(string $name, int $heigt, int $weight) {
                $this->name = $name;
                $this->heigt = $heigt;
                $this->weight = $weight;
            }
            // メソッドを定義
             public function show_heigt(){
                echo $this->heigt;
            }     
        }
        // インスタンス化する
        $animal = new Animal('dog',60, 5000);
        //インスタンス$Animalの各プロパティの値を出力する 
        print_r($animal);
        // 改行
        echo '<br>';
        $food->show_price();
        // 改行
        echo '<br>';
        $animal->show_heigt();
            ?>
    </p>
 
</body>
</html>