<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "SELECT memberid, name FROM member ";
    $sql .= "WHERE memberid IN (1,2,3)";

    $result = $dbConnect -> query($sql);

    if($result){
        $dataCount = $result -> num_rows;

        for($i = 0; $i < $dataCount; $i++){
            $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
            echo "사용자 번호 {$memberInfo['memberid']}의 이름은 ".$memberInfo['name'];
            echo "<br>";
        }
    }else{
        echo "실패";
    }
?>