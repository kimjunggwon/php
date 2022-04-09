<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql/connectdb2.php';

    $sql = "ALTER TABLE member CHANGE currentAge nationality int";
    $res = $dbConnect -> query($sql);

    if($res){
        echo "필드명 변경 완료";
    }else{
        echo "필드명 변경 실패";
    }
?>