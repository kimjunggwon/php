<?php
    class pen{
        public $color;
        public $bold;
        public $price;

        function __construct($color, $bold, $price){
            echo "사용 중인 펜";
            echo "<br>";
            echo "색 : {$color}";
            echo "<br>";
            echo "두께 : {$bold}";
            echo "<br>";
            echo "가격 : {$price}원";
        }

        public function write($contents){
            echo "{$contents}을 쓰다.";
        }

        function __destruct(){
            echo "pen 객체 사용이 끝났습니다.";
        }
    }

    $pen = new pen('pink', 'weight', '1000');
    echo "aaa";
    $pen -> write('test');
?>