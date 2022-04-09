<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "ALTER TABLE member ADD INDEX(name)";

    $result = $dbConnect -> query($sql);

    if($result){
        echo "적용 완료";
    }else{
        echo "적용 실패";
    }
?>