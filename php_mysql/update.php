<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql/connectdb2.php';

    $sql = "UPDATE member SET name = 'test5' WHERE memberid = 4";
    $result = $dbConnect -> query($sql);

    if($result){
        echo "변경 성공";
        echo "<br>";
        $sql = "SELECT name FROM member WHERE memberid = 4";
        $result = $dbConnect -> query($sql);

        $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
        echo "사용자 번호 4의 이름은".$memberInfo['name'];
    }else{
        echo "변경 실패";
    }
?>