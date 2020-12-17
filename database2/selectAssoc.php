<?php
    include $_SERVER['DOCUMENT_ROOT'].'/database2/connectDB.php';

    $sql = "SELECT name, userid FROM mymember";
    $result = $dbConnect -> query($sql);

    $dataCount = $result -> num_rows;

    for($i = 0; $i < $dataCount; $i++){
        $memberInfo = $result -> fetch_array(MYSQL_ASSOC);
        echo "이름 : ".$memberInfo['name'];
        echo "<br>";
        echo "아이디 : ".$memberInfo['userid'];
        echo "<hr>";
    }
    /*
        fetch_array(MYSQLI_ASSOC) : 인덱스를 필드명으로 지정해서 데이터를 출력
    */
?>