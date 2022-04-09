<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "SELECT class, sum(math) FROM student GROUP BY class ";
    $sql .= "HAVING sum(math) >= 170";
    $result = $dbConnect -> query($sql);

    $dataCount = $result -> num_rows;

    for($i = 0; $i < $dataCount; $i++){
        $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
        echo "반 : ".$memberInfo['class'];
        echo "<br>";
        echo "합산 점수 : ".$memberInfo['sum(math)'];
        echo "<hr>";
    }
?>