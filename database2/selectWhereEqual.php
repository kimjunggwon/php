<?php
    include $_SERVER['DOCUMENT_ROOT'].'/database2/connectDB.php';

    $sql = "SELECT name, userid FROM mymember WHERE myMemberID='2'";
    $result = $dbConnect -> query($sql);

    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
    echo "이름 : ".$memberInfo['name'];
    echo '<br>';
    echo "아이디 : ".$memberInfo['userid'];
    /*
    select where 절 : 테이블에 데이터를 출력을 할 때 조건을 이용해서 조회
     - SELECT [테이블명] FROM 필드명 WHERE 필드명 
    */
?>