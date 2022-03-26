<?php
    $array[0] = ['name' => 'test1', 'age' => '15'];
    $array[1] = ['name' => 'test2', 'age' => '25'];
    $array[2] = ['name' => 'test3', 'age' => '35'];
    $array[3] = ['name' => 'test4', 'age' => '45'];

    foreach($array as $arr_data){
        echo "name : ".$arr_data['name'];
        echo "<br>";
        echo "age : ".$arr_data['age'];
        echo "<br>";
    }
?>