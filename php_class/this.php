<?php
    class pen{
        public $color = 'blue';

        function __construct($color){
            echo "파라미터 color의 값 : {$color}";
            echo "<br>";
            echo "프라퍼티 color의 값 : {$this -> color}";
            echo "<br>";
            $this -> color = $color;
        }

        public function write($contents){
            echo "{$this -> color}색 펜을 사용하여 ";
            echo "{$contents}을 쓰다";
        }
    }

    $pen = new pen('pink');
    $pen -> write('text');
?>