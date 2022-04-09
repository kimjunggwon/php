<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "INSERT INTO member(userid, name, password, ";
    $sql .= "email, birthday, gender, reg_date) ";
    $sql .= "VALUES('test5', 'test5', 'test123%', ";
    $sql .= "test4@test.com, '2021-01-01', 'm', NOW());";

    $result = $dbConnect -> query($sql);

    if($result){
        echo "입력 완료";
    }else{
        echo "입력 실패";
    }
?>