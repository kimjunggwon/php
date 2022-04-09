<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "SELECT * FROM student WHERE english = ";
    $sql .= "(SELECT max(english) FROM student)";

    $result = $dbConnect -> query($sql);

    $dataCount = $result -> num_rows;

    for($i = 0; $i < $dataCount; $i++){
        $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
        echo "사용자 번호 : ".$memberInfo['id'];
        echo "<br>";
        echo "반 : ".$memberInfo['class'];
        echo "<br>";
        echo "영어 : ".$memberInfo['english'];
        echo "<hr>";
    }
?>