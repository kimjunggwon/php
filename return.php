<?php
    function sum($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
        echo '함수';
    }

    echo sum(5,10);
    
    $plus = sum(5,10);
    echo '<br>';
    echo $plus + 20;

    /*
        return : 함수를 호출한 곳으로 값을 전달
         - return 전달할 값
    */
?>