<?php
    $data = file_get_contents('./json2.php');
    if($data !== false){
        echo "데이터 형 : ".gettype($data)."<br>";
        echo $data;
    }else{
        echo "실패";
    }
?>