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
    }

    $pen = new pen('pink', 'weight', '1000');
?>