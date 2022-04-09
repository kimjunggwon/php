<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql/connectdb2.php';

    $sql = "CREATE TABLE test(";
    $sql .= "memberid int(10) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "PRIMARY KEY(memberid))";

    $res = $dbConnect -> query($sql);

    if($res){
        echo "테스트 테이블 생성 완료";
    }else{
        echo "테스트 테이블 생성 실패";
    }
?>