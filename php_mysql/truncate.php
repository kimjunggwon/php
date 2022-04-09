<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql/connectdb2.php';

    $sql = "TRUNCATE member";
    $res = $dbConnect -> query($sql);

    if($res){
        echo "초기화 성공";
    }else{
        echo "초기화 실패";
    }
?>