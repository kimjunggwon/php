<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql/connectdb2.php';

    $sql = "SELECT name, userid FROM member";
    $result = $dbConnect -> query($sql);

    $dataCount = $result -> num_rows;

    for($i = 0; $i < $dataCount; $i++){
        $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
        echo "이름 : ".$memberInfo['name'];
        echo "<br>";
        echo "아이디 : ".$memberInfo['userid'];
        echo "<hr>";
    }
?>