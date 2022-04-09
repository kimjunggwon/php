<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql/connectdb2.php';

    $sql = "SELECT name FROM member LIMIT 3";
    $result = $dbConnect -> query($sql);

    $dataCount = $result -> num_rows;
    echo "데이터 수 : {$dataCount} <br>";

    for($i = 0; $i < $dataCount; $i++){
        $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
        echo "이름 : ".$memberInfo['name'];
        echo "<br>";
    }
?>