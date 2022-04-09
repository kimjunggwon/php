<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $member1 = "CREATE TABLE member1(";
    $member1 .= "id INT UNSIGNED NOT NULL AUTO_INCREMENT,";
    $member1 .= "name VARCHAR(10) NOT NULL,";
    $member1 .= "email VARCHAR(30) NOT NULL,";
    $member1 .= "PRIMARY KEY(id))";
    $member1 .= "CHARSET=utf8";

    $member2 = "CREATE TABLE member2(";
    $member2 .= "id INT UNSIGNED NOT NULL AUTO_INCREMENT,";
    $member2 .= "name VARCHAR(10) NOT NULL,";
    $member2 .= "email VARCHAR(30) NOT NULL,";
    $member2 .= "PRIMARY KEY(id))";
    $member2 .= "CHARSET=utf8";

    $sqlList = array();

    $sqlList['member1'] = $member1;
    $sqlList['member2'] = $member2;

    foreach($sqlList as $key => $sl){
        $result = $dbConnect -> query($sl);

        if($result){
            echo "{$key} 테이블 생성 완료";
        }else{
            echo "{$key} 테이블 생성 실패";
        }
        echo "<br>";
    }
?>