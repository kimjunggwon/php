<?php
    $age = 25;

    switch($age){
        case ($age >= 10 && $age <= 19):
            echo "10대입니다.";
        break;

        case ($age >= 20 && $age <= 29):
            echo "20대입니다.";
        break;

        case ($age >= 30 && $age <= 39):
            echo "30대입니다.";
        break;
    }
?>