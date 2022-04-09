<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql/connectdb2.php';

    $sql = "DELETE FROM member WHERE memberid = 4";
    $result = $dbConnect -> query($sql);

    if($result){
        echo "삭제 성공";
        echo "<br>";
        $sql = "SELECT memberid, name FROM member";
        $result = $dbConnect -> query($sql);

        $dataCount = $result -> num_rows;

        echo "현재 사용자<br>";
        for($i = 0; $i < $dataCount; $i++){
            $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
            echo "사용자 번호 {$memberInfo['memberid']}";
            echo "<br>";
        }
    }else{
        echo "변경 실패";
    }
?>