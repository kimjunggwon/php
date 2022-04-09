<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "CREATE TABLE prodReview (";
    $sql .= "prodreviewid int unsigned auto_increment,";
    $sql .= "memberid int unsigned,";
    $sql .= "content tinytext,";
    $sql .= "reg_date datetime not null,";
    $sql .= "PRIMARY KEY(prodreviewid))";
    $sql .= "CHARSET=utf8;";

    $result = $dbConnect -> query($sql);

    if($result){
        echo "테이블 생성 완료";
    }else{
        echo "테이블 생성 실패";
    }
?>