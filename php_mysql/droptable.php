<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql/connectdb2.php';

    $sql = "DROP TABLE test";

    $res = $dbConnect -> query($sql);

    if($res){
        echo "테이블 삭제 완료";
    }else{
        echo "테이블 삭제 실패";
    }
?>