<?php
    $data = file_get_contents('./json2.php');

    if($data !== false){
        $data = json_decode($data, true);
        echo "데이터 형 : ".gettype($data)."<br>";
        echo $data['student'][0]['score']['math'];
        echo "<br><pre>";
        var_dump($data);
    }else{
        echo "실패";
    }
?>