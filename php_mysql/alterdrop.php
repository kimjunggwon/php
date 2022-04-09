<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql/connectdb2.php';

    $sql = "ALTER TABLE member DROP nationality";
    $res = $dbConnect -> query($sql);

    if($res){
        echo "필드 삭제 완료";
    }else{
        echo "필드 삭제 실패";
    }
?>