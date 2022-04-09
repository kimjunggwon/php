<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "(SELECT name, email FROM member1)";
    $sql .= " UNION ALL ";
    $sql .= "(SELECT name, email FROM member2)";

    $result = $dbConnect -> query($sql);

    $dataCount = $result -> num_rows;

    for($i = 0; $i < $dataCount; $i++){
        $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
        echo "이름 : ".$memberInfo['name'];
        echo "<br>";
        echo "이메일 : ".$memberInfo['email'];
        echo "<hr>";
    }
?>