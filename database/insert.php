<?php
    include $_SERVER['DOCUMENT_ROOT'].'/database/connectDB.php';

    $sql = "INSERT INTO mymember(";
    $sql .= "userid, name, password,";
    $sql .= "phone, email, birthDay, gender, regTime)";
    $sql .= "VALUES('everdevelHost', 'test','test','everdevel@everdevel.com',";
    $sql .= "'010-1234-5678','1900-01-01', 'm', now());";
    echo $sql;

    $res = $dbConnect -> query($sql);

    if($res){
        echo "데이터 입력 완료";
    }else{
        echo "데이터 입력 실패";
    }

    /*
    테이블에 데이터 입력
     - INSERT INTO [테이블명(입력할 필드명)] VALUES(입력할 데이터);
    */
?>