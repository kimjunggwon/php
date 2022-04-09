<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "ALTER TABLE member modify email varchar(30) ";
    $sql .= "NOT NULL UNIQUE";
    $result = $dbConnect -> query($sql);

    if($result){
        echo "변경 완료";
    }else{
        echo "변경 실패";
    }
?>