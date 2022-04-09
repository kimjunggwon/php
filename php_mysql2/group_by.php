<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "UPDATE student SET class = 1 WHERE id = '1'";
    $dbConnect -> query($sql);

    $sql = "SELECT class, avg(english) AS avgEng FROM student GROUP BY class";
    $result = $dbConnect -> query($sql);

    $dataCount = $result -> num_rows;

    for($i = 0; $i < $dataCount; $i++){
        $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
        echo "반 : ".$memberInfo['class'];
        echo "<br>";
        echo "평균 영어 점수 : ".$memberInfo['avgEng'];
        echo "<hr>";
    }
?>