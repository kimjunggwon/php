<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "CREATE TABLE student (";
    $sql .= "id int(10) unsigned AUTO_INCREMENT,";
    $sql .= "memberid int unsigned,";
    $sql .= "class tinyint unsigned,";
    $sql .= "english tinyint unsigned NOT NULL,";
    $sql .= "math tinyint unsigned NOT NULL,";
    $sql .= "science tinyint unsigned NOT NULL,";
    $sql .= "PRIMARY KEY (id))";
    $sql .= "CHARSET = utf8;";

    $result = $dbConnect -> query($sql);

    if($result){
        echo "테이블 생성 완료";
    }else{
        echo "테이블 생성 실패";
    }

?>