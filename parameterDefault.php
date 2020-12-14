<?php
    function sum($param1 = 50, $param2 = 100){
        $sum = $param1 + $param2;
        return $sum;
    }

    echo "sum(5,10) = ".sum(5,10);
    echo "<br>";
    echo "sum(5)=".sum(5);
    echo "<br>";
    echo "sum() = ".sum();

    /*
     - 파라미터 기본값 설정
       function 함수명(파라미터 = 기본값){
           명령문
       }
    */

?>