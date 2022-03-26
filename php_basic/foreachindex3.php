<?php
    $array[0] = ['name' => 'test1', 'age' => '15'];
    $array[1] = ['name' => 'test2', 'age' => '25'];
    $array[2] = ['name' => 'test3', 'age' => '35'];
    $array[3] = ['name' => 'test4', 'age' => '45'];

    foreach($array as $index => $value){
        foreach($value as $index2 => $value2){
            if($index2 == 'name'){
                echo "아이디 : {$value2} ";
            }
            if($index2 == 'age'){
                echo "나이 : {$value2} ";
            }
        }
        echo '<br><br>';
    }
?>