<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "SELECT CONCAT(name,'의 이메일 주소는 ', email, '입니다.') ";
    $sql .= "AS word FROM member";

    $result = $dbConnect -> query($sql);

    $dataCount = $result -> num_rows;

    for($i = 0; $i < $dataCount; $i++){
        $concat = $result -> fetch_array(MYSQLI_ASSOC);
        echo $concat['word'];
        echo "<br>";
    }
?>