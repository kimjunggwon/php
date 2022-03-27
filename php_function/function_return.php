<?php
    function sum($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;

        echo "힘수";
        //위의 return이 되어 출력이 되지 않음
    }

    echo sum(1, 5);

    $plus = sum(1, 5);
    echo "<br>";
    echo $plus + 20;
?>