<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql/connectdb2.php';

    $sql = "INSERT INTO member(";
    $sql .= "userid, name, password,";
    $sql .= "email, birthday, gender, reg_date)";
    $sql .= "VALUES('test', 'test',";
    $sql .= "'test123!@#', 'test@test.com',";
    $sql .= "'1998-06-08', 'm', now());";

    $res = $dbConnect -> query($sql);

    if($res){
        echo "데이터 입력 완료";
    }else{
        echo "데이터 입력 실패";
    }
?>